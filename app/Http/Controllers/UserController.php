<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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

    public function buyUnits(Request $request) {
        $user = User::first();
       
        if ($user->food >= $request->input('soldier') * 1) {
            $user->food -= $request->input('soldier');
            $user->soldier += $request->input('soldier');
            $user->save();
            return redirect()->route('index')->with('success', 'Units bought');
        } else {
            return redirect()->route('index')->with('error', 'Not enough funds');
        }
    }

    
}
