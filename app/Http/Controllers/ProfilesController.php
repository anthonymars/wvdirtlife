<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Profile;
use Image;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->user_id = Auth::id();
        $profile->location = $request->location;
        $profile->bio = $request->bio;
        $profile->ride = $request->ride;

        if ($request->hasFile('pic_url')){
          $pic_url = $request->file('pic_url');
          $time = time();
          $filename = 'rider-' . $time . '.' . $pic_url->getClientOriginalExtension();
          $filesm = 'small-' . $filename;
          $filelg = 'large-' . $filename;

          Image::make($pic_url)->orientate()->resize(null, 200, function($constraint) {
            $constraint->aspectRatio();
          })->save( public_path('/images/profiles/small/' . $filesm ));

          Image::make($pic_url)->orientate()->resize(400, null, function($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
          })->save( public_path('/images/profiles/large/' . $filelg ));

          $profile->pic_url = $filename;
        } else {
          $profile->pic_url = 'default.jpg';
        }

        $profile->save();
        $id = Auth::id();
        return redirect('/profiles/'.$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::whereUserId($id)->first();
        if (empty($profile)) {
          return redirect('/profiles/create');
        }
        else {
          return view('profiles.show', compact('profile'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::whereId($id)->first();
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $profile = Profile::whereId($id)->first();
      $profile->user_id = Auth::id();
      $profile->location = $request->location;
      $profile->bio = $request->bio;
      $profile->ride = $request->ride;

      if ($request->hasFile('pic_url')){
        $pic_url = $request->file('pic_url');
        $time = time();
        $filename = 'rider-' . $time . '.' . $pic_url->getClientOriginalExtension();
        $filesm = 'small-' . $filename;
        $filelg = 'large-' . $filename;

        Image::make($pic_url)->orientate()->resize(null, 200, function($constraint) {
          $constraint->aspectRatio();
        })->save( public_path('/images/profiles/small/' . $filesm ));

        Image::make($pic_url)->orientate()->resize(400, null, function($constraint) {
          $constraint->aspectRatio();
          $constraint->upsize();
        })->save( public_path('/images/profiles/large/' . $filelg ));

        $profile->pic_url = $filename;
      } else {
        $pic = $profile->pic_url;
        $profile->pic_url = $pic;
      }

      $profile->save();
      $id = Auth::id();
      return redirect('/profiles/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
