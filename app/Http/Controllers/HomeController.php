<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class HomeController extends Controller
{
    public function home()
    {
    	$usuarios = User::all();
    	return view('home', compact('usuarios'));
    }
}
