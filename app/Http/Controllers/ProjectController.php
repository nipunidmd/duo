<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::whereStatus(0)->get();

        return view('project',compact('projects'));
    }

    public function projectDetail($slug){
        $project = Project::with('projectImages')->where('slug',$slug)->first();

        if(!$project){
          return redirect('/');
        }

        return view('project-detail',compact('project'));
    }

    public function underConstruction()
    {
        // $projects = Project::whereStatus(0)->get();

        return view('under-construction');
    }

    public function proposal()
    {
        // $projects = Project::whereStatus(0)->get();

        return view('proposal');
    }

    public function underConstructionDetail()
    {
        // $projects = Project::whereStatus(0)->get();

        return view('under-construction-detail');
    }


}
