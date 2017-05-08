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
        <h1>Create Your Profile</h1>
      </div>
      <div class="panel-body">
        <form enctype="multipart/form-data" action="/profiles" method="post">

          {{ csrf_field() }}
          <div class="form-group">
            <label for="location">Location</label>
            <select name="location" id="" class="form-control">
              <option value="Northern WV">Northern WV</option>
              <option value="Panhandle">Panhandle</option>
              <option value="Parts Unknown">Parts Unknown</option>
              <option value="Southern WV">Southern WV</option>
              <option value="Eastern WV">Eastern WV</option>
              <option value="Western WV">Western WV</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ride">Current Bike:</label>
            <input type="text" class="form-control" name="ride">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control summernote" name="bio" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label for="pic_url">Rider Pic (If no image provided a default is loaded)</label>
            <input type="file" name="pic_url">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-dirt"><i class="fa fa-plus"></i> Add Profile</button>
          </div>
        </form>

      </div>
    </div>
 </div>
</div>




@stop
