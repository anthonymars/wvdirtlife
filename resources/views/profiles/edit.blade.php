@extends('layouts.app')
@section('title')
WV DIRT - Add Video
@stop
@section('description')
Edit Your Profile
@stop
@section('content')
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-dirt">
      <div class="panel-heading">
        <h1>Edit Your Profile</h1>
      </div>
      <div class="panel-body">
        @if(empty($profile) || $profile->user_id !== Auth::id())
        <p>One day in the future.. Things are going to start working out for you... until then... I leave you with this</p>
        @else
        <form enctype="multipart/form-data" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="location">Location</label>
            <select name="location" id="" class="form-control">
              <option value="{{$profile->location}}">{{$profile->location}}</option>
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
            <input type="text" class="form-control" name="ride" value="{{$profile->ride}}">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea class="form-control summernote" name="bio" id="" cols="30" rows="10">{{$profile->bio}}</textarea>
          </div>

          <div class="form-group">
            <img src="../../images/profiles/small/{{$profile->pic_url}}" alt="profile pic" class="img img-responsive topSmallSpace">
            <label for="pic_url">Current Rider Pic (New Pic will not load until you click 'Save Changes')</label>
            <input type="file" name="pic_url" >

          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-dirt"><i class="fa fa-pencil"></i> Save Changes</button>
          </div>
        </form>
        @endif
      </div>
    </div>
 </div>
</div>




@stop
