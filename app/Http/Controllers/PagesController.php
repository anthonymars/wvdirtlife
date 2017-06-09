<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dirtvid;
use Auth;

class PagesController extends Controller
{
    public function index() {
      $d = Dirtvid::whereUserId(1)->orderBy('created_at', 'desc')->first();
      return view('pages.index', compact('d'));
    }

    public function shops() {
      return view('pages.shops');
    }

    public function trails() {
      return view('pages.trails');
    }

    public function pics() {
      return view('pages.pics');
    }
}
