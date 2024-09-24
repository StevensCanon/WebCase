@extends('layouts.plantilla')

@section('title', 'Editar proyecto')

@section('content')

    @include('partials.validation-errors')

    <div class="max-w-3xl mx-auto my-20 p-6 bg-zinc-200 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">@lang('Edita tu Proyecto')</h1>

        <form method="POST" enctype="multipart/form-data" action="{{ route('projects.update', $project) }}">
            @method('PATCH')

            @include('projects._form', ['btnText' => 'Actualizar'])

        </form>

    @endsection
