<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class AdminsController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'roles:admin']);
    }

    public function index()
    {   
        $admins = User::all()->where('rol', 'admin');

        return view('admin.index', compact('admins'));
    }


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
