<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{

    public function __construct()
{
    $this->middleware('can:admin.users.index')->only('index');
    $this->middleware('can:admin.users.create')->only('create', 'store');
    $this->middleware('can:admin.users.edit')->only('edit', 'update');
    $this->middleware('can:admin.users.destroy')->only('destroy');
}
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $roles = Role::all();

        $user = User::find($id);
        return view('users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user ->roles()->sync($request->roles);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect('/usuarios')->with('Info', 'El usuario ha sido actualizado correctamente.');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Crear el usuario
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirigir al usuario a la lista de usuarios
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }



}
