@extends('layouts.app')
@section('title')
WV DIRT - MX | Enduro | Trail Videos
@stop
@section('description')
Videos from WV Trails and Tracks
@stop
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$dirtvid->url}}" allowfullscreen></iframe>
      </div>
      <hr>
      <h1>{{ $dirtvid->title }} | <span class="mainColor">{{$dirtvid->user->name }}</span></h1>
      <h3>Posted on: <span class="mainColor">{{ $dirtvid->created_at->toDayDateTimeString() }}</span></h3>
      {!! $dirtvid->description !!}
    </div>
  </div>
</div>

@stop
