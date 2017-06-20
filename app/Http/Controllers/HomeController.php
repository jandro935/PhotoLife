<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(2);
        $states = State::get();

        return view('welcome', ['photos' => $photos], ['states' => $states]);
    }
}
