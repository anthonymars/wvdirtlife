@extends('layouts.app')
@section('title')
WV DIRT - Rider Profiles
@stop
@section('description')
Profiles of users on WVDirtLife
@stop
@section('content')

<div class="container">
  <h1>Rider Profiles</h1>
  <h2>All WVDirt Registered Riders/Uploaders/Shops</h2>
  <hr>
  @if(empty($profiles))
  <div class="alert alert-danger">
    <p>OMG !!!! NO USERS</p>
  </div>
  @else
  <div class="row">
  <div class="col-md-6">
    @foreach($profiles as $p)
    <div class="row">
      <div class="col-md-5">
        <img src="../images/profiles/small/{{$p->pic_url}}" alt="" class="img img-responsive">
      </div>
      <div class="col-md-7">
        <h3>{{ $p->user->name }}</h3>
        <h4>{{ $p->location }}</h4>
        <h4>{{ $p->ride }}</h4>
        <a href="/profiles/{{ $p->id }}" class="btn btn-dirt"><i class="fa fa-user-circle-o"></i> View Profile</a>
      </div>
    </div>
    <hr>
    @endforeach
  </div>
  <div class="col-md-6">


  </div>
  </div>
  <hr>
  @endif
</div>

@stop
