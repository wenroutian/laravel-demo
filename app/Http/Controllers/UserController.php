<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


    public function info()
    {
        $user = Auth::user();
        return view('user.info', compact('user'));
    }
}
