@extends('layouts.app')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div class="flex justify-center">

        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">

            <div class="md:w-1/2 lg:w-6/12 px-5">
                <img src="{{ asset('img/aVATAR.webp') }}" alt="imagen de usuario">
            </div>

            <div class="md:w-1/12 lg:w-6/12 px-5 ">
                {{-- <p class="font-bold uppercase">{{ auth()->user()->username }}</p> --}}
                <p class="font-bold uppercase">{{ $user->username }}</p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    1
                    <span class="font-normal mt-10">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    1
                    <span class="font-normal">Seguidos</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    1
                    <span class="font-normal">Post</span>
                </p>

            </div>

        </div>

    </div>
    <section class="container mx-auto mt-10">
        <h2 class="text-4xl text-center font-black my-10">Publicaciones</h2>
        @if ($posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $posts->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay POSTS</p>
        @endif
    </section>
@endsection
