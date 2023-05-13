<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function edit($id)
    {
    $user = User::find($id);
    return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();

    return redirect('/users')->with('success', 'El usuario ha sido actualizado correctamente.');
    }


}
