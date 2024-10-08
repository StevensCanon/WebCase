@extends('layouts.plantilla')

@section('title', 'Portfolio')
@section('content')


    <div class="container mx-auto px-4 my-10">
        <div class="flex justify-between items-center mb-8">
            @isset($category)
                <div>
                    <h1 class="font-bold text-3xl text-sky-400">{{ $category->name }}</h1>
                    <p class="text-sky-400 underline flex-auto mt-10 "> <a href="{{ route('projects.index', $category) }}">Volver
                            al portafolio</a>
                    </p>
                </div>
            @else
                <h1 class="font-extrabold text-3xl text-sky-400">@lang('Projects')</h1>


                @can('create', $newProject)
                    <a href="{{ route('projects.create') }}">
                        <button class="bg-sky-950 hover:bg-sky-900 rounded-lg text-white font-bold py-2 px-4">
                            Crear
                        </button>
                    </a>
                @endcan
            @endisset
        </div>

        <p class="text-justify text-gray-300 mb-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($projects as $project)
                <div class="max-w-sm bg-zinc-200 border border-zinc-200 rounded-lg shadow-lg">
                    @if ($project->image)
                        <img class="w-full h-48 object-content rounded-t-lg" src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }}">
                    @endif

                    <div class="p-6">
                        <h1 class="mb-2 text-2xl font-bold text-slate-900">{{ $project->titulo }}</h1>
                        <p class="mb-3 text-gray-700">{{ $project->descripcion }}</p>
                        <p class="text-neutral-900 mb-4">{{ $project->created_at->diffForHumans() }}</p>
                        <a href="{{ route('projects.show', $project) }}"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-sky-950 rounded-lg hover:bg-gray-700">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


     
       





        <div class="mt-10 flex justify-center">
            {{ $projects->links() }} <!-- Enlaces de paginación -->
        </div>

        <div class=" rounded-md p-6 my-20">
            <h2 class="text-white text-2xl font-bold mt-10 flex items-center">
                <i class="fas fa-trash-alt mr-2"></i> Proyectos Eliminados
            </h2>
            <ul class="text-white mt-4 space-y-4">
                @foreach ($deletedProjects as $deletedProject)
                    <li class="flex justify-between items-center border-b border-white py-2">
                        <span>{{ $deletedProject->titulo }}</span>
                        <div class="flex space-x-2">
                            @can('restore', $deletedProject)
                                <form action="{{ route('projects.restore', $deletedProject) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-3 rounded flex items-center">
                                        <i class="fas fa-undo-alt mr-1"></i> Restaurar
                                    </button>
                                </form>
                            @endcan
                            @can('forceDelete', $deletedProject)
                                <form action="{{ route('projects.forceDelete', $deletedProject) }}" method="POST"
                                    style="display:inline;"
                                    onsubmit="return confirm('Esta acción no se puede deshacer, ¿Estás seguro de querer eliminar el proyecto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded flex items-center">
                                        <i class="fas fa-trash mr-1"></i> Eliminar permanentemente
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>



    </div>
@endsection
