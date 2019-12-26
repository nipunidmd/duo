<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectImage;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Validator;
use Datatables;
use Image;
use File;
use Auth;
use DB;

class ProjectController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $pastProject = Project::where('status' ,'0')->count();

    $ongoingProject = Project::where('status' ,'1')->count();

    $projectProposal = Project::where('status' ,'2')->count();

    return view('projects.index',compact('ongoingProject','pastProject','projectProposal'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('projects.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $this->validate($request, $this->getRules());
    $main_image = $this->uploadBase64Image($request->main_image);

    DB::beginTransaction();

    try {
        $project = new Project();
        $project->name          = $request->name;
        $project->location      = $request->location;
        $project->description   = $request->description;
        $project->type          = $request->project_type;
        $project->status        = $request->project_status;
        $project->image         = $main_image;
        $project->active        = 1;
        $project->user_id       = Auth::user()->id;
        $project->save();

        $project_slug           = Project::find($project->id);
        $project_slug->slug     = str_slug($project->name.'-'.$project->id);
        $project_slug->save();


        $project_code        = Project::find($project->id);
        $project_code->code  = 'PRO_'.((int)$project->id + 10000);
        $project_code->save();

        if(!empty($request->bulk_image) || count($request->bulk_image) > 0){
            foreach ($request->bulk_image as $key => $image) {

                $upload_image_path = $this->projectImageUpload($project->id,$image);
                if($upload_image_path){

                    $project_image = new ProjectImage();
                    $project_image->project_id = $project->id;
                    $project_image->img_src = substr($upload_image_path,3);
                    $project_image->save();

                }
            }
        }

        DB::commit();

        // return redirect('project');
        return response()->json(['msg' => 'Project added successfully'], 200);
    } catch (Exception $e) {
      DB::rollback();
      return response()->json(['msg'=>'Something Went wrong!'], 500);
  }
}

  /**
  * Display the specified resource.
  *
  * @param  \App\Project  $projects
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Project  $projects
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $projects = Project::whereId($id)->first();

      $project_data = Project::with('images')->findOrFail($id);

      $projectid = $id;
      return view('projects.edit',compact('projectid','projects','project_data'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Project  $projects
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request,$id)
  {
    // dd($request);
    $this->validate($request, $this->getRules2($id));
    $main_image = $this->uploadBase64Image($request->main_image);

    DB::beginTransaction();

    try {
        $project                = Project::find($request->id);
        $project->name          = $request->name;
        $project->location          = $request->location;
        $project->description   = $request->description;
        $project->type          = $request->project_type;
        $project->status        = $request->project_status;

        $project->active        = 1;
        $project->user_id       = Auth::user()->id;

        if ($request->main_image) {
          $project->image       = $main_image;
        }
        $project->save();

        //removing old images
        if($request->old_bulk_image_id && count($request->old_bulk_image_id) > 0){
            $removing_images = ProjectImage::where('project_id',$request->id)->whereNotIn('id', $request->old_bulk_image_id)->get();
            foreach ($removing_images as $key => $image) {
              File::delete($image->img_src);
            }
          ProjectImage::where('project_id',$request->id)->whereNotIn('id', $request->old_bulk_image_id)->delete();
        }else{
            $removing_images = ProjectImage::where('project_id',$request->id);
            foreach ($removing_images as $key => $image) {
              File::delete($image->img_src);
            }
            ProjectImage::where('project_id',$request->id)->delete();
        }

        if(!empty($request->bulk_image) || count($request->bulk_image) > 0){
            foreach ($request->bulk_image as $key => $image) {

                $upload_image_path = $this->projectImageUpload($project->id,$image);
                if($upload_image_path){

                    $project_image = new ProjectImage();
                    $project_image->project_id = $project->id;
                    $project_image->img_src = substr($upload_image_path,3);
                    $project_image->save();

                }
            }
        }

        DB::commit();

        // return redirect('project');
        return response()->json(['msg' => 'Project updated successfully'], 200);
    } catch (Exception $e) {
        DB::rollback();
        return response()->json(['msg'=>'Something Went wrong!'], 500);
        }
    }

     /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Project  $projects
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $project = Project::find($id)->delete();

        return response()->json(['msg'=>'Project Deleted Successfully!'], 200);
    }

    public function data(Request $request)
    {
        $projects = Project::orderBy('id', 'DESC')
        // ->limit(100)
        ->where(function ($q) use ($request){
            if($request->start_date){
                $q->whereDate('created_at','>=',$request->start_date);
            }
            if($request->end_date){
                $q->whereDate('created_at','<=',$request->end_date);
            }
            if($request->status == "active"){
              $q->where('active','1');
            }elseif($request->status == "inactive"){
              $q->where('active','0');
            }
        })
        ->get();

        return Datatables::of($projects)
        ->addIndexColumn()
        
        ->addColumn('action', function ($row) {
          if(Auth::user()->active = 1)
          {
            return '
            <button type="button" class="btn btn-success" data-id="'.$row->id.'" data-toggle="modal" data-target="#viewProjectModal" onclick="viewProjectModal('.$row->id.')" title="VIEW"><i class="material-icons">visibility</i>
            </button> &nbsp;
            <a href="projects/'.$row->id.'/edit" type="button" class="btn btn-primary" data-id="'.$row->id.'" title="EDIT"><i class="material-icons">edit</i>
            </a>
            <button type="button" class="btn btn-danger" data-id="'.$row->id.'" title="DELETE">
                      <i class="material-icons">delete</i>
                  </button>';
            }
            else{
              return "";
            }
          })
          

        ->editColumn('active', function ($row) {
          if(Auth::user()->active = 1)
          {
            $check = $row->active ? 'checked':'';
            return '<div class="switch">
            <label>
            <input value="'.$row->id.'" type="checkbox" '.$check.'>
            <span class="lever switch-col-light-blue"></span>
            </label>
            </div>';
          }
          else{
              return '';
          }
        })

        ->addColumn('type', function ($row) {

            switch ($row->type) {
              case '0':
              return '<div style="text-align:center"><span class="label bg-blue">Residential</span></div>';
              break;

              case '1':
              return '<div style="text-align:center"><span class="label bg-teal">Commercial</span>';
              break;

              case '2':
              return '<div style="text-align:center"><span class="label bg-cyan">Leisure</span>';
              break;

              case '3':
              return '<div style="text-align:center"><span class="label bg-green">Industrial</span>';
              break;

              case '4':
              return '<div style="text-align:center"><span class="label bg-yellow">Public</span>';
              break;
            }

        })

        ->addColumn('status', function ($row) {

            switch ($row->status) {
              case '0':
              return '<div style="text-align:center"><span class="label bg-green">Past</span></div>';
              break;

              case '1':
              return '<div style="text-align:center"><span class="label bg-orange">Under Construction</span>';
              break;

              case '1':
              return '<div style="text-align:center"><span class="label bg-blue">Proposal</span>';
              break;
            }

        })

        ->editColumn('pro_image', function ($row) {
          // $pro_image = $row->projectImage($row->id);
          // if($pro_image){
            return '<img class="" width="100px" src="'."../".$row->image.'">';
        // }
    })

        ->rawColumns(['active','action','pro_image','type','status'])
        ->make(true);
    }

    public function active(Request $request){

        $this->validate($request, ['project_id' => 'required']);

        $project = Project::findOrFail($request->project_id);
        $project->active = $request->status;
        $project->save();

        return response()->json(['msg' => 'Project status changed successfully'], 200);
    }

    public function getRules($id=0)
    {

        $this->rules = [
            'name'           => 'required|max:100',
            'location'       => 'required|max:100',
            'main_image'     => 'required',
            'project_type'   => 'required',
            'project_status' => 'required',
            'img'            => 'nullable',
            "bulk_image"     => "array|max:3",
            "images.*"       => "nullable|mimes:jpg,jpeg,gif,png",
        ];


      return $this->rules;
    }

    public function getRules2($id=0)
    {

        $this->rules = [
            'name'           => 'required|max:100',
            'location'       => 'required|max:100',
            'project_type'   => 'required',
            'project_status' => 'required',
            'img'            => 'nullable',
            "bulk_image"     => "array|max:3",
            "images.*"       => "nullable|mimes:jpg,jpeg,gif,png",
        ];


      return $this->rules;
    }

    public function uploadBase64Image($img_data)
    {
        $newname = str_random(10).".png";
        if ($img_data) {
          $data = $img_data;
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $data = base64_decode($data);

          $save_target = "../assets/uploads/projects/main_image/".$newname;
          $db_path = "assets/uploads/projects/main_image/".$newname;
          $target = $save_target;


            if (file_put_contents($target, $data)) {
                $img = imagecreatefrompng($target);
                imagealphablending($img, false);

                imagesavealpha($img, true);

                imagepng($img, $target, 8);
                return $db_path;
            } else {
                return "error";
            }
        }
    }

    private function projectImageUpload($id,$file){

      $img = Image::make($file);

      $img->fit(698,398);

      $data = $img->encode();

      $newname = str_random(10) . ".jpg";

      $target = "../assets/uploads/projects/project " . $id . "/images";

      $imagePath = $target.'/'.$newname;

      if (!File::exists($target)) {
        File::makeDirectory($target, $mode = 0777, true, true);
    }

    if (file_put_contents($imagePath, $data)) {
        return $imagePath;

    } else {
        return false;
    }

  }

    public function viewProject(Request $request)
    {
        $project = Project::whereId($request->id)->first();
        return view('projects.view',compact('project'));
    }

}
