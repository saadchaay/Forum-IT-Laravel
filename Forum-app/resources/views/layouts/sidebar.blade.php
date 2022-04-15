<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="flex justify-between">
        <div class="h-screen w-48 px-4 border-r bg-white">
            <div class="flex flex-col justify-start text-gray-500 pt-4">
                <h3 class="pl-1 text-sm flex items-center py-4 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <a class="hover:text-black transition duration-200 ease-linear" href="{{route('posts.index')}}">Posts</a>
                </h3>
                <h3 class="pl-1 text-sm flex items-center py-4 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                    <a class="hover:text-black transition duration-200 ease-linear" href="{{route('comments.index')}}">Comments</a>
                </h3>
                <h3 class="pl-1 text-sm flex items-center py-4 mb-2 hover:bg-gray-100 hover:text-gray-700 transition duration-200 ease-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="black">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <a class="hover:text-black transition duration-200 ease-linear" href="{{route('users.index')}}">Users</a>
                </h3>
            </div>
        </div>
        <div class="flex-auto">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset('js/usersMethod.js') }}" ></script>
</body>
