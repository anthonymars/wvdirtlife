@extends('layouts.app')
@section('title')
WV DIRT - All Roles
@stop
@section('description')
All Roles
@stop
@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-dirt">
      <div class="panel-heading">
        <h1>All Roles</h1>
      </div>
      <div class="panel-body">
      @foreach($roles as $r)
      <p>{{$r->name}}</p>
      @endforeach
      </div>
    </div>
  </div>
</div>
@stop
