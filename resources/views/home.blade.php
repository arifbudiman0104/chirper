<x-guest-layout>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="flex items-center mb-10 min-h-max">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </div>
        <div class="w-full px-6 py-16 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="items-center mb-10 text-center min-h-max justify-evenly">
                <h1 class="text-xl font-bold">Welcome to Chirper!</h1>
                <h1 class="text-base text-gray-500">Created with Laravel 9, Laravel Breeze and tutorial from
                    <a href="https://bootcamp.laravel.com/introduction" class="text-indigo-500">Bootcamp Laravel</a>
                </h1>
            </div>
            <div class="flex items-center min-h-max justify-evenly">
                <a href="/login"
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">LOGIN</a>
                <a href="/register"
                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">REGISTER</a>
            </div>
        </div>
    </div>
</x-guest-layout>
