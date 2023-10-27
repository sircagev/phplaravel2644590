<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
    return view('auth.register');
    }

    public function store(Request $request) {
        /* dd($request); */

        $request->request->add(['username'=>Str::slug($request->username)]);

        //validar
        $this->validate($request,[
            'name'=>'required|max:30',
            'username' => 'required|unique:users|min:3|max:30',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);
        
        //Insertar en base de datos
        User::create([
            'name'=>$request->name,
            'username' => Str::lower($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //autenticar
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        //redireccionar
        return redirect()->route('post.index');
    }
}
