@extends('layouts.app')
@section('title', 'Projects')
@push('moreCss')
  @include('includes.datatables-css')
  @include('includes.form-css')
  <style>
  .row {
      margin-left: 0px !important;
    }
    .imageBox
    {
      position: relative;
      height: 400px;
      width: 400px;
      border:1px solid #aaa;
      background: #fff;
      overflow: hidden;
      background-repeat: no-repeat;
      cursor:move;
    }

    .imageBox .thumbBox
    {
      position: absolute;
      top: 8%;
      left: 8%;
      width: 340px;
      height: 340px;
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
    .boxGray{
      background-color: #ccc;
      padding-top: 13px;
      padding-left: 10px;
    }

    .action
    {
      width: 400px;
      height: 30px;
      margin: 10px 0;
    }
    .cropped>img
    {
      margin-right: 10px;
    }
    .hidden
    {
      display: none;
    }
    .redstar
    {
      color:red;
    }

</style>
<link href="{{asset('assets/css/image-bulk-upload.css')}}" media="all" rel="stylesheet" type="text/css"/>
@endpush
@section('pageTitle', 'Projects')
@section('content')
  
<section class="content">
  <div class="container-fluid">
      <div class="block-header">
        <h2>PROJECT MANAGEMENT</h2>
      </div>
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
              <div class="header">
                <span class="pull-right">
                  <a href="{{route('projects.index')}}" class="btn btn-primary btn-sm">PROJECT LIST</a>
                </span>
                    <h2>
                        ADD NEW PROJECTS
                        <small>Add new projects in to the system</small>
                    </h2>
                </div>

                <div class="body">
                  <div class="row clearfix">
                    {!! Form::open(['url' => 'projects','id' => 'formCreate', 'class' => 'form-horizontal', 'name'=> 'formCreate','method'=>'POST'])!!}
                    <div class="col-sm-6" style="margin-bottom:5%">
                        <div class="form-group">
                           <div class="form-line">
                              <label for="title">Name</label>
                                <input type="text" class="form-control" name="name">     
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-bottom:5%">
                        <div class="form-group">
                           <div class="form-line">
                              <label for="title">Location</label>
                                <input type="text" class="form-control" name="location">     
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:5%">
                        <div class="form-group">
                          <div class="form-line">
                            <label for="title">Description</label>
                              <textarea name="description" class="form-control" rows="2"></textarea>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6" style="margin-bottom:5%">
                      <label for="title">Project Type</label>
                        <select class="form-control show-tick" name="project_type" id="project_type">
                          <option value="" selected>Select Project Type</option>
                          <option value="0">Residential</option>
                          <option value="1">Commercial</option>
                          <option value="2">Leisure</option>
                          <option value="3">Industrial</option>
                          <option value="4">Public</option>
                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-bottom:5%">
                      <label for="title">Project Status</label>
                        <select class="form-control show-tick" name="project_status" id="project_status">
                          <option value="" selected>Select Projcet Status</option>
                          <option value="0">Past</option>
                          <option value="1">Ongoing</option>
                          <option value="2">Proposal</option>
                        </select>
                    </div>
                    <div class="col-xs-12" style="padding-left:0px !important;">
                      <div class="container-fluid">
                        {{-- <span style="color:red">*</span> --}}
                        <label class="control-label">Project Main Image</label>
                        <div class="imageBox">
                          <div class="thumbBox"></div>
                          <div class="spinner" style="display: none">Loading...</div>
                        </div>
                        <div class="action">
                          <input type="file" id="file" style="float:left; width: 250px">
                          <button type="button" id="btnCrop"  style="float: right"><span id="loading"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i></span> Crop</button>
                          <input type="button" id="btnZoomIn" value="+" style="float: right">
                          <input type="button" id="btnZoomOut" value="-" style="float: right">
                        </div>

                        <input type="hidden" id="main_image"  name="main_image" form="formCreate"  value="">
                      </div>
                    </div>
                    <div class="cropped col-xs-12">

                    </div>
                    <div class="col-md-12" style="margin-bottom:5%">
                      <div>
                        <label>Project Slider Images (Select 3 images)</label>
                        <br>
                        <div id="imagesBundleContent"></div>
                          <div>
                            <div class="input-group mb-3">
                            <div>
                            <input type="file" multiple id="imagesBulkUploadInput" data-max-count="3">
                            <label class="custom-file-label" for="imagesBulkUploadInput">Choose images</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:5%">
                       @if (count($errors) > 0)
                      <div >
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li style="color:red">{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                    </div>
                    <div class="col-sm-12">
                    {{--<button type="submit" class="btn btn-default btn-sm form" id="btnSubmit">SUBMIT</button>--}}
                    <button class="btn btn-primary" type="button" name="button" id="btnSubmit">Submit</button>
                    </div>
                    {!! Form::close() !!}
                  </div> 
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('moreJs')
  @include('includes.form-js')
  @include('includes.datatables-js')
  {{-- <script src="{{ asset('assets/js/project-handler.js') }}" charset="utf-8"></script> --}}
  <script src="{{ asset('assets/js/cropbox.js') }}"></script>
  <script src="{{ asset('assets/js/crud-2.0.js') }}" charset="utf-8"></script>
  <script src="{{asset('assets/js/image-bulk-upload.js')}}"></script>

  {{-- CRUD SETUP --}}
  <script type="text/javascript">

  var ajaxURL = base_url+"/projects/create"
  var SSPEnable = false
  var opt = {responsive: true}


  function submitData(url,method)
  {

    formData = new FormData(document.getElementById('formCreate'))
    ajaxCall(formData,method)
  }

  function ajaxCall(data,method) {
    $('#btnSubmit').prop("disabled", "disabled");
    $.ajax({
      url: url,
      type: method,
      dataType: 'JSON',
      data: data,
      processData: false,
      contentType: false,
    })
    .done(function(data) {
      onLoading([],0)
      onSuccess(data.msg)

      window.location.replace("{{ url('projects') }}")

    })
    .fail(function(data) {
      onLoading([],0)
      errorHandler(data.responseJSON)
    })

  }

</script>
<script type="text/javascript">
window.onload = function() {
  var options =
  {
    imageBox: '.imageBox',
    thumbBox: '.thumbBox',
    spinner: '.spinner',

  }
  var cropper = new cropbox(options);
  document.querySelector('#file').addEventListener('change', function(){
    var reader = new FileReader();
    reader.onload = function(e) {
      options.imgSrc = e.target.result;
      cropper = new cropbox(options);
    }
    reader.readAsDataURL(this.files[0]);
    this.files = [];
  })
  document.querySelector('#btnCrop').addEventListener('click', function(){
    var img = cropper.getDataURL()
    document.querySelector('.cropped').innerHTML = '<img id="crop" style="max-width : 100%;" src="'+img+'">';
    $('#main_image').val(img);
  })
  document.querySelector('#btnZoomIn').addEventListener('click', function(){
    cropper.zoomIn();
  })
  document.querySelector('#btnZoomOut').addEventListener('click', function(){
    cropper.zoomOut();
  })
};
</script>
@endpush
