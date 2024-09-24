@extends('layouts.plantilla')

@section('title', 'Contact')
@section('content')
   

    <div class="max-w-lg mx-auto my-6 p-10   rounded-lg shadow-lg bg-zinc-200">

        <h1 class="text-3xl font-bold text-center mb-8">@lang('¡Envianos tu mensaje!')</h1>

        <form method="POST" action="{{ route('messages.store') }}">
            @csrf

            <div class="mb-4">
                <input type="text" name="name" placeholder="Ingresa tu nombre" value="{{ old('name') }}" required
                       class="w-full p-3  -gray-400 rounded focus:outline-none focus:ring-2 focus:ring-sky-950">
                {!! $errors->first('name', '<small class="text-red-800 text-sm">:message</small>') !!}
            </div>

            <div class="mb-4">
                <input type="email" name="email" placeholder="Ingresa tu email" value="{{ old('email') }}" required
                       class="w-full p-3  -gray-400 rounded focus:outline-none focus:ring-2 focus:ring-sky-950">
                {!! $errors->first('email', '<small class="text-red-800 text-sm">:message</small>') !!}
            </div>

            <div class="mb-4">
                <input type="text" name="subject" placeholder="Escribe tu asunto" value="{{ old('subject') }}" required
                       class="w-full p-3  -gray-400 rounded focus:outline-none focus:ring-2 focus:ring-sky-950">
                {!! $errors->first('subject', '<small class="text-red-800 text-sm">:message</small>') !!}
            </div>

            <div class="mb-4">
                <textarea name="content" placeholder="Escribe tu Mensaje" required
                          class="w-full p-3  -gray-400 rounded focus:outline-none focus:ring-2 focus:ring-sky-950">{{ old('content') }}</textarea>
                {!! $errors->first('content', '<small class="text-red-800 text-sm">:message</small>') !!}
            </div>

            <button type="submit" class="w-full py-3 bg-sky-950 text-white font-semibold rounded hover:bg-gray-600 transition">
                Enviar
            </button>
        </form>
    </div>
@endsection
