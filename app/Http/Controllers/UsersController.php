<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc')->paginate(10);
        
        return view('user.index', [
            'user' => $user,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
