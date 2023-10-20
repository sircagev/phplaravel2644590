@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class='md:flex md:justify-center md:gap-10 md:items-center'>
        <div class='md:w-6/12 p-5'>
            <img class="" src="{{ asset('img/fondo.png') }}" alt="imagen de registro">
        </div>
        <div class='md:w-4/12 bg-white p-6 rounded-lg shadow-xl'>
            <form action="{{route('register')}}" method='POST'>
                @csrf
                <div class='mb-5'>
                    <label for='name' class='mb-2 block uppercase text-gray-500 font-bold'>Nombre</label>
                    <input type='text' id='name' name='name' placeholder='Nombre' class='border p-3 w-full rounded-lg'/>
                </div>
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class='mb-5'>
                    <label for='username' class='mb-2 block uppercase text-gray-500 font-bold'>Username</label>
                    <input type='text' id='username' name='username' placeholder='Username' class='border p-3 w-full rounded-lg'/>
                </div>
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class='mb-5'>
                    <label for='email' class='mb-2 block uppercase text-gray-500 font-bold'>E-mail</label>
                    <input type='text' id='email' name='email' placeholder='E-mail' class='border p-3 w-full rounded-lg'/>
                </div>
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class='mb-5'>
                    <label for='password' class='mb-2 block uppercase text-gray-500 font-bold'>Password</label>
                    <input type='password' id='password' name='password' placeholder='Password' class='border p-3 w-full rounded-lg'/>
                </div>
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                <div class='mb-5'>
                    <label for='password_confirmation' class='mb-2 block uppercase text-gray-500 font-bold'>Repetir Password</label>
                    <input type='password' id='password_confirmation' name='password_confirmation' placeholder='Repetir password' class='border p-3 w-full rounded-lg'/>
                </div>
                @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <input type='submit' value='Crear Cuenta' class='bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg'/>
            </form>
        </div>
    </div>
@endsection