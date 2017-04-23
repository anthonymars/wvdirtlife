<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dirtvid;
use Auth;
use Carbon\Carbon;

class DirtvidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dirtvids = Dirtvid::orderBy('created_at', 'desc')->get();
        return view('dirtvids.index', compact('dirtvids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dirtvids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d = new Dirtvid;
        $d->user_id = Auth::id();
        $d->title = $request->title;
        $d->url = $request->url;
        $d->small_desc = $request->small_desc;
        $d->description = $request->description;
        $d->save();

        return redirect('/dirtvids');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $dirtvid = Dirtvid::whereId($id)->first();
      return view('dirtvids.show', compact('dirtvid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
