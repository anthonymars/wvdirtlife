@extends('layouts.app')
@section('title')
WV DIRT - Add Role
@stop
@section('description')
Add Role
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
        <h1>Enter New Role</h1>
      </div>
      <div class="panel-body">
      <form action="/admin/roles" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Role Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-dirt" type="submit"><i class="fa fa-plus"></i> Add Role</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
@stop
