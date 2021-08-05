<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('home', compact('users'));
    }

    public function filter(Request $request)
    {
     
        $users = User::whereRaw('date(created_at) = ?', $request->date)->get();
        $userCount = $users->count();

       
        return view('users.filterUsers', compact('users', 'userCount'));
    }
}
