@extends('layouts.app')
@section('title')
WV DIRT - All Users
@stop
@section('description')
All Users on WVDirtLife
@stop
@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-dirt">
      <div class="panel-heading">
        <h1>All Users</h1>
      </div>
      <div class="panel-body">
      @foreach($users as $u)
      <p><a href="/admin/users/{{ $u->id }}">{{ $u->name }}</a></p>
      @endforeach
      </div>
    </div>
  </div>
</div>
@stop
