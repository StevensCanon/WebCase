@csrf

<div>
    <label for="name" class="block text-sm font-medium text-gray-700  mb-2 ">@lang('Project Name')</label>
    <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $project) }}"
        class="bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-sky-950 w-full p-2 mb-2 " required>
</div>

<div>
    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">@lang('Description')</label>
    <textarea name="description" id="description" rows="4"
        class="bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-sky-950 w-full p-2 mb-2" required>{{ old('description', $project) }}</textarea>
</div>

<div>
    <label for="url" class="block text-sm font-medium text-gray-700 mb-2 ">@lang('Project URL')</label>
    <input type="text" name="url" id="url" value="{{ old('url', $project) }}"
        class="bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-sky-950 w-full p-2 mb-2" required>
</div>

<div class="form-group">
    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Categoria</label>
    <select class="bg-white rounded-md focus:outline-none focus:ring-2 focus:ring-sky-950 w-full p-2 mb-10"
            name="category_id" id="category_id">
        <option value="" >Seleccione</option>
        @foreach ($categories as $id => $name)
            <option value="{{ $id }}"
                @if ($id == old('category_id',$project->category_id) ) selected @endif>{{ $name }}
            </option>
        @endforeach
    </select>
</div>



@if ($project->image)
    <div class="w-full my-4">
        <img class="w-full " src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
            class="max-w-xs rounded-lg shadow-md">
    </div>
@endif

<div class="flex items-center justify-center w-full">
    <label for="dropzone-file"
        class="flex flex-col items-center justify-center w-full h-30 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MIN. 400x200px)</p>
        </div>
        <input name="image" id="dropzone-file" type="file" class="hidden" />
    </label>
</div>



<div class="mt-4">
    <button class="w-full py-2 bg-gray-800 text-white rounded-md hover:bg-gray-600 transition duration-50">
        {{ $btnText }}
    </button>
</div>



<div class="mt-8">
    <a href="{{ route('projects.index') }}" class="text-blue-500 hover:underline">Volver a la lista de proyectos</a>
</div>
