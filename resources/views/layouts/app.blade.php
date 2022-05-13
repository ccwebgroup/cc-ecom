<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<livewire:styles />

<body>
    <div class="min-h-full">
        <nav x-data="{ open: false }" class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                alt="Workflow">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/"
                                    class="{{(request()->is('/')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}  px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="/catalog"
                                    class="{{(request()->is('catalog')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 rounded-md text-sm font-medium">Catalog</a>

                                <a href="/products"
                                    class="{{(request()->is('products')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 rounded-md text-sm font-medium">Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div class="grid grid-cols-3 divide-x">
                                <div>
                                    <a href="/auth/login"
                                        class="{{(request()->is('auth/login')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 rounded-md text-sm font-medium">Login</a>
                                </div>
                                <div>
                                    <a href="/auth/signup"
                                        class="{{(request()->is('auth/signup')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 rounded-md text-sm font-medium">Sign
                                        Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="open = !open"
                            class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div @click.away="open = false" x-show="open" class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a @click="open = false" href="#"
                        class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Home</a>

                    <a href="#"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="px-2 space-y-1">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Login</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                            Up</a>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <header></header>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <!-- Replace with your content -->
                <div class="px-4 py-6 sm:px-0">
                    {{ $slot }}
                </div>
                <!-- /End replace -->
            </div>
        </main>
    </div>

    {{-- Javascript --}}
    <livewire:scripts />
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
