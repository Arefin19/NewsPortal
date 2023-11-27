<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile()
    {
        $userId = auth()->id();
        $user= User::where('id', $userId)->first();

        return view('home.profile', with(['user'=> $user]));
    }
}
