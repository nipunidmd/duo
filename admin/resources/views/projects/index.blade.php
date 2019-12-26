@extends('layouts.app')
@section('title', 'Projects')
@push('moreCss')
@include('includes.datatables-css')
@include('includes.form-css')
<link href="{{asset('assets/css/image-bulk-upload.css')}}" media="all" rel="stylesheet" type="text/css"/>

<style type="text/css">
  .dataTables_wrapper .dataTables_processing {
        position: absolute;
        top: 0%;
        left: 50%;
        width: 30%;
        /*height: 40px;*/
        margin-left: -20%;
        /*margin-top: -25px;*/
        /*padding-top: 20px;*/
        text-align: center;
        font-size: 1.2em;
        background:#fff;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    .pink {
      background-color: pink !important;
    }
</style>

<style>
  .view-count {
    font-weight: normal;
    font-size: 26px;
    margin-top: -4px;
    color: #fff;
  }

  .modal-content{
    width: fit-content !important;
  }
  .imageBox
  {
    position: relative;
    height: 400px;
    width: 700px;
    border:1px solid #aaa;
    background: #fff;
    overflow: hidden;
    background-repeat: no-repeat;
    cursor:move;
  }

  .imageBox .thumbBox
  {
    position: absolute;
    top: 25%;
    left: 14%;
    width: 700px;
    height: 400px;
    margin-top: -100px;
    margin-left: -100px;
    box-sizing: border-box;
    border: 1px solid rgb(102, 102, 102);
    box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
    background: none repeat scroll 0% 0% transparent;
  }

  .imageBox .spinner
  {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    text-align: center;
    line-height: 400px;
    background: rgba(0,0,0,0.7);
  }

</style>

@endpush
@section('pageTitle', 'Project')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>PROJECT MANAGMENT</h2>
    </div>
    <div class="row clearfix">

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
          <div class="icon">
            <i class="material-icons">house</i>
          </div>
          <div class="content">
            <div class="text">ONGOING PROJECTS</div>
            <span class="view-count">{{$ongoingProject}}</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
          <div class="icon">
            <i class="material-icons">location_city</i>
          </div>
          <div class="content">
            <div class="text">PAST PROJECTS</div>
            <span class="view-count">{{$pastProject}}</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
          <div class="icon">
            <i class="material-icons">location_city</i>
          </div>
          <div class="content">
            <div class="text">PROPOSALS</div>
            <span class="view-count">{{$projectProposal}}</span>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
             
                <span class="pull-right">
                    <button type="button" class="btn bg-brown waves-effect" data-target="#filterPanel" data-toggle="collapse">FILTER</button>
                    @if(Auth::user()->active == 1)
                      <a href="{{route('projects.create')}}" class="btn bg-light-blue waves-effect" data-toggle="tooltip" data-placement="left" title="" data-original-title="ADD NEW PROJECT">
                      <i class="material-icons">add</i>
                      </a>
                    @endif
                </span>
                
                <h2>
                  ALL Projects
                  <small>All the project in the system</small>
                </h2>
              </div>

              <div class="row clearfix">
                  <div class="col-md-12 collapse out" id="filterPanel" style="padding: 10px 50px;">
                    <div class="well">
                      <div class="row">
                        <div class="col-md-12">
                          <span class="pull-right">
                            <button type="button" class="btn bg-orange waves-effect" id="btnClearFilter">CLEAR FILTERS</button>
                          </span>
                        </div>
                      </div>
                      <div class="row filter-box">

                        <div class="col-sm-4">
                          <select class="form-control show-tick filter" id="statusFilter">
                              <option value="alltypes">-- All Projects --</option>
                              <option value="active">Active Projects</option>
                              <option value="inactive">In-active Projects</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              <div class="body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th></th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Project Type</th>
                        <th>Project Status</th>
                        <th>Active</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                  <div class="pull-right" style="margin-bottom: 20px;">
                   <input type="number" id="dtPageNumber" style="width: 100px;">
                   <input type="button" id="submitDtPageNumber" value="GO">
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <div class="modal fade" id="viewProjectModal" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="#">PROJECT DETAILS</h4>
          </div>
          <div class="modal-body" >
            <div class="preloader-parent">
              <div class="preloader pl-size-xs">
                <div class="spinner-layer pl-light-blue" style="text-align:center;">
                  <div class="circle-clipper left">
                    <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                    <div class="circle"></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="projectDetails"></div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
   @endsection
   @push('moreJs')
   @include('includes.form-js')
   @include('includes.datatables-js')

   <script type="text/javascript">
    var ajaxURL = base_url+"/projects"
    var SSPEnable = true
    var opt = {
            processing: true,
      serverSide: true,
      ajax:{
        url: '{{url('projects/data')}}',
        type:'POST',
        headers: {'X-CSRF-TOKEN': token},
        dataType: 'JSON',
        beforeSend: function (xhr) {
          xhr.setRequestHeader('Authorization');
        },
        data: function(d){
          d.start_date = $('#startDateFilter').val()
          d.end_date = $('#endDateFilter').val()
          d.status = $('#statusFilter').val()
        }
      },
      // scheme:{
      //   $change:function(data){
      //       if (data.qty <= data.moq)
      //           $('td', row).css('background-color', 'Orange');
      //   }
      // },
      columns:[
        {data: 'DT_Row_Index' , name: 'DT_Row_Index',orderable: true},
        {data: 'pro_image' , name: 'pro_image', searchable: true},
        {data: 'name' , name: 'name', searchable: true},
        {data: 'code' , name: 'code', searchable: true},
        {data: 'type' , name: 'type', searchable: true},
        {data: 'status' , name: 'status', searchable: true},
        {data: "active" ,orderable: false, searchable: false},
        {data: "action",orderable: false, searchable: false},
        ],
      }
  </script> 
  <script type="text/javascript">
    
    $('.js-basic-example').on('click', 'input[type="checkbox"]', function(event) {
      id = $(this).val();
      status =  $(this).is(':checked') ? 1 : 0;

      $.ajax({
        url: base_url+'/project-active',
        type: 'POST',
        dataType: 'JSON',
        data: {_token: token,project_id: id,status:status}
      })
      .done(function(data) {
        $.notify({message: data.msg},{type: 'success',z_index:2000});
      })
      .fail(function(data) {
        $.each(data.responseJSON, function(index, val) {
          $.notify({message: val},{type: 'danger',z_index:2000});
        });
      })

    });

    $('#submitDtPageNumber').click(function(){
      let page_number = 0;
      let input_page_number = $('#dtPageNumber').val();
      if(input_page_number != ""){
        page_number = parseInt(input_page_number) - 1;
      }
      crud.datatables.page( page_number ).draw(false);
    });

    $('#formModal').on('hidden.bs.modal', function () {
      $('#cropped').html('');
      $( "#imagesBundleContent" ).empty();
    });


  // clear filter input
  $('#btnClearFilter').click(function(event){    $('#startDateFilter').val("")
    $('#endDateFilter').val("")
    $('#moqFilter').selectpicker('val', "allprojects")
    $('#statusFilter').selectpicker('val', "alltypes")
    crud.datatables.draw();
  });

  $('.filter').on('change',function(event) {
      event.preventDefault();
      datatabel.draw()
    });
  </script>

<script type="text/javascript">

  function viewProjectModal(id) {
    $.ajax({
     url: base_url + '/view-project',
     type: 'POST',
     headers: {'X-CSRF-TOKEN': token},
     data: {id: id},
     beforeSend: function () {
      $("#viewProjectModal").find(".preloader-parent").fadeIn();
      $("#projectDetails").hide();
    },
    complete: function () {
      $("#viewProjectModal").find(".preloader-parent").hide();
      $("#projectDetails").fadeIn();
    },
    success:function(data){
       // console.log(data);
       $('#projectDetails').html(data);
     }
   })

  }
</script>
   <script src="{{ asset('assets/js/cropbox.js') }}"></script>
   <script src="{{asset('assets/js/image-bulk-upload.js')}}"></script>
   <script src="{{ asset('assets/js/crud-2.0.js') }}" charset="utf-8"></script>
  @endpush
