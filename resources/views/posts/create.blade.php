@extends('layouts.app')

@section('titulo')
    Crear una nueva publicacion
@endsection
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-6/12 px-10">
        <form action="{{ route('imagenes.store') }}" enctype="multipart/form-data" method="post" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            @csrf
        </form>
    </div>
    <div class="md:w-6/12 px-10 bg-white p-6 rounded-lg shadow-xl">
        <form method="post" action="{{ route('login') }}"  novalidate>

            @csrf

            <div class="mb-5">
                <label for="title" class="mb-2 block uppercase text-gray-500 font-bold" >Titulo</label>
                <input type="text" id="title" name="title" placeholder="Titulo" class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror" value="{{old('title')}}">
                @error('title')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="description" class="mb-2 block uppercase text-gray-500 font-bold" >Descripcion de la publicación</label>
                <textarea type="te" id="description" name="description" placeholder="Descripcion" class="border p-3 w-full rounded-lg @error('description') border-red-500 @enderror" value="{{old('name')}}"></textarea>
                @error('description')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
            </div>

            <input type='submit' value='Publicar' class='bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg'/> 
        </form>
    </div>
</div>
@endsection

