<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return view('profile.single', compact('user'));
    }
}
