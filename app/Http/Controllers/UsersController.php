<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
        $user = User::first();

        return view('index', ['user' => $user]);
    }

    public function addResources() {
        $user = User::first();
        $user->food +=10;
        $user->metal +=10;
        $user->day++;
        $user->save();

        return view('index', ['user' => $user]);
    }

    
}
