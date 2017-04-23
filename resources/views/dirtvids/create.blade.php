@extends('layouts.app')
@section('title')
WV DIRT - Add Video
@stop
@section('description')
Add a video to the site
@stop
@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-dirt">
      <div class="panel-heading">
        <h1>Enter Video Information</h1>
      </div>
      <div class="panel-body">
      <form action="/dirtvids" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Video Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <p><strong>For Your Video URL:</strong><br />
          The Share link on youtube is in the form:<br />
          <strong>https://youtu.be/Your_Video_ID</strong><br />
          only enter the part after the forward slash "/": the <strong>'Your_VIDEO_ID'</strong> Part
          </p>
          <label for="url">Video Url</label>
          <input type="text" class="form-control" name="url">
        </div>
        <div class="form-group">
          <label for="small_desc">Listing Description (50 Characters)</label>
          <textarea name="small_desc" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="" cols="30" rows="10" class="summernote form-control"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-dirt" type="submit"><i class="fa fa-plus"></i> Add Video</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
@stop
