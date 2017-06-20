<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ControllerTrait;

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
        $states = ControllerTrait::getStates();

        return view('welcome', ['photos' => $photos], ['states' => $states]);
    }
}
