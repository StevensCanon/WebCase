@extends('layouts.plantilla')

@section('title', 'Portafolio | ' . $project->titulo)
@section('content')

<div class="mx-auto max-w-4xl my-10 p-6 bg-white rounded-lg shadow-lg">
    <div class="flex">
        <div class="flex-1 pr-4">
            <h2 class="font-bold text-3xl text-slate-900 mb-4">{{ $project->titulo }}</h2>
            <p class="text-gray-700 mb-6 text-justify">{{ $project->description }}</p>
            <h4 class="text-gray-600 mb-6"><strong>Publicado hace {{ $project->created_at->diffForHumans() }}</strong></h4>

            <div class="flex space-x-4 mb-6">
                <a href="{{ route('projects.edit', $project) }}"
                    class="bg-green-500 rounded-md p-3 text-white hover:bg-green-600 transition duration-200">
                    Editar
                </a>

                <form method="POST" action="{{ route('projects.destroy', $project) }}">
                    @csrf
                    @method('DELETE')
                    <button
                        class="bg-red-500 rounded-md p-3 text-white hover:bg-red-800 transition duration-200">Eliminar</button>
                </form>
            </div>

            <div class="mt-8">
                <h3 class="font-bold text-lg text-gray-800">Más Información</h3>
                <ul class="list-disc list-inside text-gray-600 mt-2">
                    <li><strong>Creador:</strong> {{ $project->creator }}</li>
                    <li><strong>Categoría:</strong> {{ $project->category }}</li>
                    <li><strong>Fecha de Creación:</strong> {{ $project->created_at->format('d/m/Y') }}</li>
                </ul>
            </div>

            <div class="mt-8">
                <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">Volver a la lista de
                    proyectos</a>
            </div>
        </div>

        @if ($project->image)
            <div class="w-3/5">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-fill rounded-lg shadow-md">
            </div>
        @endif
    </div>
</div>

@endsection
