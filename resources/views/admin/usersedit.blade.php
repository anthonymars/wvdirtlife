@extends('layouts.app')
@section('title')
WV DIRT - Edit User Role
@stop
@section('description')
Edit Roles For a User
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
        <h1>Edit {{ $u->name}}</h1>
      </div>
      <div class="panel-body">
      <form action="/admin/users/{{ $u->id }}/update" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" name="name" value="{{$u->name}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">User Email</label>
          <input type="text" name="email" value="{{$u->email}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="select">Role</label>
          <div class="">
            <select name="role[]" class="form-control" multiple>
              @foreach ($roles as $role)
              <option value="{{ $role->name }}"
              @if (in_array($role->name, $selectedRoles)) selected="selected"
              @endif>{{ $role->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <button class="btn btn-dirt" type="submit"><i class="fa fa-pencil-square-o"></i> Add Role</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
@stop
