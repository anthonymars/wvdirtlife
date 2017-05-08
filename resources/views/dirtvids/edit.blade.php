@extends('layouts.app')
@section('title')
WV DIRT - Edit Video
@stop
@section('description')
Edit Your Video
@stop
@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    @if(session('status'))
    <div class="alert alert-success">
      <p>{{session('status')}}</p>
    </div>
    @endif
    <div class="panel panel-dirt">
      <div class="panel-heading">
        <h1>Edit {{ $d->title}}</h1>
      </div>
      <div class="panel-body">
      @if(Auth::user() && Auth::id() === $d->user_id)
      <form action="/dirtvids/{{ $d->id }}/edit" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Video Title</label>
          <input type="text" name="title" class="form-control" value="{{ $d->title }}">
        </div>
        <div class="form-group">
          <p><strong>For Your Video URL:</strong><br />
          The Share link on youtube is in the form:<br />
          <strong>https://youtu.be/Your_Video_ID</strong><br />
          only enter the part after the forward slash "/": the <strong>'Your_VIDEO_ID'</strong> Part
          </p>
          <label for="url">Video Url</label>
          <input type="text" class="form-control" name="url" value="{{ $d->url }}">
        </div>
        <div class="form-group">
          <label for="small_desc">Listing Description (50 Characters)</label>
          <textarea name="small_desc" id="" cols="30" rows="10" class="form-control">{{ $d->small_desc}}</textarea>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="" cols="30" rows="10" class="summernote form-control">{{ $d->description }}</textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-dirt" type="submit"><i class="fa fa-pencil-square-o"></i> edit Video</button>
        </div>
      </form>
      @else
      <div class="alert alert-danger">
        <p>Oh No He Didn't</p>
      </div>
      @endif
      </div>
    </div>
  </div>
</div>
@stop
