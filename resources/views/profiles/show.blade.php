@extends('layouts.app')
@section('title')
WV DIRT - Profiles
@stop
@section('description')
Rider Profiles
@stop
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <img src="../images/profiles/large/large-{{$profile->pic_url}}" alt="profile pic" class="img img-responsive topSmallSpace">
      @if ($profile->id === Auth::id())
      <a href="/profiles/{{$profile->id}}/edit" class="btn btn-dirt topSmallSpace"><i class="fa fa-pencil"></i> Edit Profile</a>
      @endif
    </div>
    <div class="col-md-6">
      <h1>{{$profile->user->name}}</h1>
      <h2>LOCATION: {{$profile->location}}</h2>
      <h3>CURRENT BIKE: {{$profile->ride}}</h3>
      <hr>
      <p>{!!$profile->bio!!}</p>
    </div>
  </div>
</div>

@stop
