@extends('layouts.plantilla')

@section('title', 'About')
@section('content')
<div class="mx-16 my-10">
    <h1 class="text-3xl text-sky-400 font-bold mb-4">Acerca de nosotros</h1>
    <p class="text-gray-300 mb-6">
        Somos una empresa dedicada a construir proyectos web. Conoce nuestro portafolio y descubre cómo podemos ayudar a llevar tu visión a la realidad.
    </p>
    <p class="text-gray-300 mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod, nisl eget consectetur sagittis, nisl nisi cursus nisi, nec convallis elit ligula nec libero. Vivamus scelerisque sapien et nulla tincidunt, nec convallis neque ultrices. Proin ut sapien et urna viverra hendrerit. Suspendisse potenti. Sed fermentum enim nec augue volutpat, et feugiat sem consequat. Ut tincidunt vitae metus sed cursus. 
    </p>
    <p class="text-gray-300 mb-4">
        Sed aliquam, metus at cursus consectetur, lorem urna sollicitudin sapien, vel lacinia magna felis ac elit. Maecenas lacinia, elit ac vehicula tincidunt, risus justo ultrices eros, a hendrerit sem turpis eu nunc. Aenean tincidunt magna in justo vehicula, id interdum erat tincidunt. 
    </p>
    <p class="text-gray-300 mb-4">
        Curabitur eget ligula neque. Integer consequat, risus eu interdum sagittis, lectus mi dictum metus, sed tincidunt libero nunc et arcu. Praesent id odio et ipsum volutpat dapibus. In hac habitasse platea dictumst. Fusce ut metus ac urna sodales ultrices. 
    </p>

    <a href="{{route('projects.index')}}"><button " class="text-white w-full bg-sky-950 hover:bg-sky-700 h-14">
        Portafolio
    </button></a><br>
    <a href="{{route('contact')}}"><button class="w-full my-3 border-sky-950 border hover:bg-sky-950 h-14 text-white">
        Contactanos
    </button></a>
</div>
@endsection
