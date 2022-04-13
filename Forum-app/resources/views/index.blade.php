@extends('layouts.app')

@section('content')

    <!-- trending user today section -->
    <main class="sm:container sm:mx-auto sm:mt-10">
        <h2 class="max-w-sm my-6 font-bold text-lg">Recent posts</h2>
            <div class="flex justify-around flex-no-wrap">
                @for($i=0; $i<3; $i++)
                <div class="max-w-sm bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg m-0.5">
                    <div id="header" class="flex items-center mb-4">
                        <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                        <div id="header-text" class="leading-5 ml-6 sm">
                            <h4 id="name" class="text-xl font-semibold">John Doe</h4>
                            <h5 id="job" class="font-semibold text-blue-600">Designer</h5>
                        </div>
                    </div>
                    <div id="quote">
                        <q class="italic text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</q>
                    </div>
                    <div class="h-auto flex mt-4">
                        <img class="w-6 h-6 m-2" src="{{ asset('icons/like.svg') }}"> <span class="text-cool-gray-500">1223</span>
                        <img class="w-6 h-6 m-2" src="{{ asset('icons/unlike.svg') }}"> <span class="text-cool-gray-500">1223</span>
                    </div>
                </div>
                @endfor
            </div>
    </main>
    <!-- body section -->
    <section class="sm:container sm:mx-auto sm:mt-10 grid grid-cols-3 gap-4">
        <!-- main top section user -->
        <div class="col-span-2">
            <h2 class="max-w-sm my-6 font-bold text-lg">Top Posts</h2>
            <div class="h-10 bg-white flex border border-gray-200 rounded items-center">
                <input placeholder="Category..." name="select" id="select" class="px-4 appearance-none outline-none text-gray-800 w-full bg-white" checked />

                <button class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-gray-600 bg-white">
                    <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <label for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-gray-600">
                    <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="18 15 12 9 6 15"></polyline>
                    </svg>
                </label>
            </div>
            <!-- section all Posts -->
            <div class="my-6">
                @for($i=0; $i<5; $i++)
                <div class="px-4 w-full">
                    <div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
                        <div class="author flex items-center -ml-3 my-3">
                            <div class="user-logo">
                                <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                            </div>
                            <h2 class="text-sm tracking-tighter text-gray-900">
                                <a href="#">By Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                            </h2>
                        </div>
                        <div class="md:flex-shrink-0">
                            <img src="https://ik.imagekit.io/q5edmtudmz/post1_fOFO9VDzENE.jpg" alt="mountains" class="w-full h-64 rounded-lg rounded-b-none">
                        </div>
                        <div class="px-4 py-2 mt-2 flex-col items-center">
                            <h2 class="font-bold text-2xl text-gray-800">My Amaizing Journey to the Mountains.</h2>
                            <p class="text-sm text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro amet ab debitis deleniti modi soluta similique...
                            </p>
                            <div class="flex items-center justify-between mt-2 mx-2">
                                <a href="#" class="text-blue-500 text-xs -ml-3 ">Show More</a>
                                <div class="h-auto flex mt-4">
                                    <a href="#" class="flex text-gray-700">
                                        <img class="w-6 h-6 m-2" src="{{ asset('icons/like.svg') }}"> <span class="text-cool-gray-500">1223</span>
                                    </a>
                                    <a href="#" class="flex text-gray-700">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                            <img class="w-6 h-6 m-2" src="{{ asset('icons/like.svg') }}"> <span class="text-cool-gray-500">1223</span>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-wrap pb-4">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
                            </div>
                            <div class="w-full md:w-full flex items-start md:w-full px-3">
                                <button class="p-2 px-5 text-gray-100 text-lg rounded-lg focus:border-2 border-blue-300">Post Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
        <!-- Top Users Section -->
        <div class="ml-10">
            <h2 class="max-w-sm my-6 font-bold text-sm">Top Users</h2>
            <div class="flex justify-center flex-col items-center">
                @for($i=0; $i<3; $i++)
                    <div class="max-w-sm bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg m-0.5 flex justify-around items-center">
                        <div id="header" class="flex items-center mb-4 flex-wrap">
                            <img alt="avatar" class="w-20 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                            <div id="header-text" class="leading-5 ml-6 sm">
                                <h4 id="name" class="text-xl font-semibold">John Doe</h4>
                                <h5 id="job" class="font-semibold text-blue-600">Designer</h5>
                            </div>
                            <div class="text-base text-blue-900 font-bold">
                                Votes: 122
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
