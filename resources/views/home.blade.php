<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-16 justify-between">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a class="text-gray-900 dark:text-white font-bold mx-8" href="{{ route('Home') }}">
                        WebCase
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-8">
                <a href="{{ route('login') }}"
                    class="{{ setActive('login') }} hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">{{ __('Login') }}</a>
                <a href="{{ route('register') }}"
                    class="{{ setActive('register') }} hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2 rounded-md text-sm font-medium">{{ __('Register') }}</a>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('Home') }}"
                class="{{ setActive('Home') }} block text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">{{ __('Home') }}</a>
            <a href="{{ route('login') }}"
                class="{{ setActive('login') }} block text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">{{ __('Login') }}</a>
            <a href="{{ route('register') }}"
                class="{{ setActive('register') }} block text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 px-3 py-2 rounded-md text-base font-medium">{{ __('Register') }}</a>
        </div>
    </div>
</nav>

<x-app-layout>
    <div class="  bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="pt-40 text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                    Bienvenido a WebCase
                </h1>
                <p
                    class="mt-3 max-w-md mx-auto text-base text-gray-600 dark:text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Descubre un nuevo mundo de posibilidades con nuestra innovadora plataforma. WebCase te ofrece
                    soluciones integrales para tus proyectos web.
                </p>
                <a href="{{ route('login') }}"> <button
                        class="my-20 rounded-xl bg-gray-600 hover:bg-gray-800 text-white p-4 w-1/6 ">Comenzar</button></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Nuestros Servicios</h2>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li>Diseño web responsivo</li>
                            <li>Desarrollo de aplicaciones personalizadas</li>
                            <li>Optimización de rendimiento</li>
                            <li>Integración de APIs</li>
                            <li>Soporte técnico 24/7</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Por qué elegirnos</h2>
                        <p class="text-gray-600 dark:text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="py-6 text-center ">
                    <h2 class="text-4xl font-bold text-white mb-10">¿Listo para comenzar?</h2>
                    <img class="w-full" src="https://www.damos.co/mediateca/files/planes_responsive.jpg" alt="">

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Innovación Continua</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt aliquet eros pretium
                            congue. Vestibulum nibh sem, sodales eget gravida non, vulputate eu elit.
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Soluciones Personalizadas</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Nullam pulvinar metus libero, eget viverra est dictum ac. Integer vel mauris tincidunt,
                            luctus dui eget, dapibus arcu. Fusce convallis pellentesque ipsum, ac tempor mi aliquam
                            eget.
                        </p>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Soporte Premium</h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Fusce rhoncus, orci in sagittis imperdiet, magna odio dictum enim, quis aliquam justo urna
                            et ante. Maecenas id luctus nisl. Maecenas in est scelerisque, gravida dui nec, pulvinar
                            ante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-xl overflow-hidden">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Nuestro Compromiso</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Suspendisse porta laoreet ante eget aliquet. Nulla arcu augue, tincidunt a dapibus id,
                        condimentum vel neque. Vestibulum eu magna metus. Ut ac tellus sit amet nisl scelerisque
                        sollicitudin.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300">
                        Nulla tempus efficitur nibh at pretium. Ut vitae vestibulum orci. Sed faucibus elit nec iaculis
                        lobortis. Donec augue libero, maximus quis nulla vel, placerat tincidunt dui.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam malesuada nulla id
                        faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed diam libero,
                        dignissim a purus ac, ultrices sagittis justo. Vestibulum vehicula vitae velit quis accumsan.
                        Sed et mauris nec orci volutpat faucibus. Nullam non purus dolor. Etiam mollis tortor sed libero
                        dapibus, pharetra venenatis nibh semper. Phasellus rutrum varius nunc, elementum lacinia nisl
                        pellentesque nec. Ut sed nisi diam. Vivamus id magna turpis. Integer sit amet felis sagittis,
                        finibus libero ut, lobortis velit.
                        <br><br>
                        Aliquam cursus elit orci, non sagittis risus aliquam vitae. Integer aliquet arcu id erat
                        hendrerit, sed sagittis odio viverra. Pellentesque habitant morbi tristique senectus et netus et
                        malesuada fames ac turpis egestas. Nulla tincidunt ultricies pretium. Nam accumsan purus vitae
                        tellus cursus, nec porta tortor accumsan. Aenean consectetur placerat purus, ac efficitur lorem
                        eleifend ac. Nam varius eget lorem in luctus.

                        Praesent quis nisl viverra, mollis libero id, ullamcorper leo. Nullam commodo aliquet malesuada.
                        Sed viverra massa augue, ac suscipit ipsum dignissim eu. Aenean quis quam elit. Donec convallis
                        leo nibh, non bibendum felis commodo sit amet. Duis quis est at eros ultricies dictum. Mauris eu
                        tortor arcu. Pellentesque tincidunt mi sapien, at fringilla nunc ultricies eget.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
