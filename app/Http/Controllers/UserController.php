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
     
        // $date = $request->all;
        // $data['date'] = Carbon::createFromFormat('m/d/Y', $request->$date)->format('Y-m-d');

        // $users = User::whereDate('created_at', $date)->get();

        $users = User::whereRaw('date(created_at) = ?', $request->date)->get();

       
        return view('users.filterUsers', compact('users'));
    }
}
