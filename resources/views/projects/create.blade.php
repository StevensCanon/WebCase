@extends('layouts.plantilla')

@section('title', 'Crear proyecto')

@section('content')
    <div class="max-w-3xl mx-auto my-20 p-6 bg-zinc-200 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">@lang('Crea tu Proyecto')</h1>

        @include('partials.validation-errors')

        <form method="POST" 
        enctype="multipart/form-data" action="{{ route('projects.store') }}" class="space-y-4">
            @csrf

            @include('projects._form', ['btnText' => 'Crear'])

            
            </div>
        </form>
    </div>
@endsection
