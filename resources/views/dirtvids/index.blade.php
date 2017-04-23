@extends('layouts.app')
@section('title')
WV DIRT - Dirt Vids
@stop
@section('description')
Videos from West Virginia MX, Trails, and Rock Gardens
@stop
@section('content')

<div class="container">
  <h1>DirtVids</h1>
  <hr>
  <div class="row">
    <div class="col-md-8">
      @foreach($dirtvids as $d)
      <div class="row">
        <div class="col-md-3">
          <img src="http://img.youtube.com/vi/{{$d->url}}/2.jpg" alt="{{$d->title}}">
        </div>
        <div class="col-md-9">
          <h4>{{ $d->title }}</h4>
          <p>{{ $d->small_desc }}<br />
            <small>posted by: {{ $d->user->name }} on <span class="mainColor">{{ $d->created_at->toDayDateTimeString() }}</span></small></p>
          <a href="/dirtvids/{{ $d->id }}" class="btn btn-dirt"><i class="fa fa-video-camera"></i> Watch Vid</a>
        </div>
      </div>
      <hr>
      @endforeach
    </div>
    <div class="col-md-4">

    <!--  twitter or fb feed -->
    <h2>Twitter Feed</h2>

    </div>
  </div>
</div>

@stop
