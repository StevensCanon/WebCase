@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')

    <div class="mx-8 my-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
            <h1 class="text-4xl font-extrabold text-sky-400 mb-4">Hola </h1>
            <p class="text-lg text-gray-300 mb-6">Bienvenid@ {{ $nombre ?? 'invitado' }}</p>
            <p class="text-justify text-zinc-300 mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac nisi et velit aliquet ullamcorper.
                Sed vel tellus vel nunc cursus tincidunt. Nullam vitae nulla a purus lacinia luctus. Sed ut aliquam
                elit. Vivamus ut tellus ac lectus euismod bibendum. Integer in ligula non urna sodales auctor ut et
                ligula. Suspendisse potenti.
            </p>
            <p class="text-justify text-zinc-300 mb-4">
                Duis bibendum purus sed erat euismod, vel fermentum dui vehicula. Aliquam erat volutpat. Nunc eu
                nulla vitae lorem scelerisque convallis. Integer euismod mauris non nisi venenatis, at ultrices nunc
                viverra.
                Duis bibendum purus sed erat euismod, vel fermentum dui vehicula. Aliquam erat volutpat. Nunc eu
                nulla vitae lorem scelerisque convallis. Integer euismod mauris non nisi venenatis, at ultrices nunc
                viverra. Duis bibendum purus sed erat euismod, vel fermentum dui vehicula. Aliquam erat volutpat. Nunc eu
                nulla vitae lorem scelerisque convallis. Integer euismod mauris non nisi venenatis, at ultrices nunc
                viverra.
            </p>
        </div>

        <div class="flex justify-center">
            <img src="{{asset('images/web.png')}}"
                alt="Imagen informativa" class="rounded-lg shadow-lg w-full ">
        </div>
    </div>

    <section class="my-10 mx-8">
        <h2 class="text-3xl font-extrabold text-sky-400 mb-4 my-20">Acerca de nosotros</h2>
        <p class="text-justify text-zinc-300 mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac nisi et velit aliquet ullamcorper.
            Sed vel tellus vel nunc cursus tincidunt. Nullam vitae nulla a purus lacinia luctus. Sed ut aliquam
            elit. Vivamus ut tellus ac lectus euismod bibendum.
        </p>
    </section>

    <section class="my-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mx-8">
        @foreach (['Servicio 1', 'Servicio 2', 'Servicio 3'] as $index)
            <div class="bg-transparent border border-gray-200 rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold text-blue-300">Servicio {{ $index }}</h3>
                <p class="text-white mb-4">Descripción breve del servicio {{ $index }}. Lorem ipsum dolor sit amet.
                </p>
                <a href="#"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-sky-950 rounded-lg hover:bg-gray-600">
                    Más info
                </a>
            </div>
        @endforeach
    </section>

    <section class="my-10 mx-8">
        <h2 class="text-3xl font-extrabold  text-sky-400 mb-4">Testimonios</h2>
        <div class="space-y-4">
            <blockquote class="border-l-4 border-sky-950 pl-4 text-zinc-300 italic">
                "Su trabajo ha transformado nuestra presencia en línea. ¡Altamente recomendados!"
                <footer class="mt-2">— Cliente Satisfecho</footer>
            </blockquote>
            <blockquote class="border-l-4 border-sky-950 pl-4 text-zinc-300 italic">
                "Un equipo excepcional. Los resultados superaron nuestras expectativas."
                <footer class="mt-2">— Empresa XYZ</footer>
            </blockquote>
           
            <blockquote class="border-l-4 border-sky-950 pl-4 text-zinc-300 italic">
                "Su trabajo ha transformado nuestra presencia en línea. ¡Altamente recomendados!"
                <footer class="mt-2">— Cliente Satisfecho</footer>
            </blockquote>
          
            <blockquote class="border-l-4 border-sky-950 pl-4 text-zinc-300 italic">
                "Su trabajo ha transformado nuestra presencia en línea. ¡Altamente recomendados!"
                <footer class="mt-2">— Cliente Satisfecho</footer>
            </blockquote>

        </div>
    </section>



@endsection
