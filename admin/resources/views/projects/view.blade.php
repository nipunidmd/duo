
<section class="row">

 {{-- <div class="row"> --}}
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p><b>Project Code        :</b> <span>{{$project->code}}</span></p>

      <p><b>Name        :</b> <span>{{$project->name}}</span></p>

      <p><b>Location        :</b> <span>{{$project->location}}</span></p>

      @if(!empty($project->description))
      <p><b>Description        :</b> <span>{{$project->description}}</span></p>
      @endif
      <br>

  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <p><b>Project Type :
                    @if($project->type == 0)
                    </b> <span>Recedential</span>
                    @elseif($project->type == 1)
                    </b> <span>Commercial</span>
                    @elseif($project->type == 2)
                    </b> <span>Leisure</span>
                    @elseif($project->type == 3)
                    </b> <span>Industrial</span>
                    @else
                    </b> <span>Public</span>
                    @endif
      </p>

      <p><b>Project Status     :
                    @if($project->status == 0)
                    </b> <span>Past</span>
                    @elseif($project->status == 1)
                    </b> <span>Ongoing</span>
                    @else
                    </b> <span>Proposal</span>
                    @endif
      </p>
      
      <p><b>Added Date  :</b> <span>{{$project->created_at->format('Y-m-d')}}</span></p><br>
  </div>

  <div class="col-md-12" style="text-align:left;">
   <p class="font-bold col-cyan"> PROJECT IMAGE</p> 
   <img src="../{{$project->image}}" width="50%">


  </div>
  
</section>



