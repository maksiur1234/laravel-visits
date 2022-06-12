<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('userdashboard');
        }elseif(Auth::user()->hasRole('writer')){
            return view('writerdashboard');
        }elseif(Auth::user()->hasRole('superadministrator')){
            return view('dashboard');
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }
    
    public function visitcreate()
    {
        $users = User::all();
        return view('visitcreate');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'date' => 'required|date|uniqe',
        ]);
    }
}
