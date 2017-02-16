<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class ModeradoresController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'roles:moderador']);
    }
    public function index()
    {   
        $moderadores = User::all()->where('rol', 'moderador');

        return view('moderador.index', compact('moderadores'));
    }


    public function create()
    {
        //
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
