@extends('layouts.app')

@section('content')
    <div class="sm:container sm:mx-auto sm:mt-10 grid grid-cols-3 gap-4">
        <div class="flex justify-around col-span-3">
            <!-- section user information -->
            <div class="col-span-1">
                <h2 class="max-w-sm my-6 font-bold text-lg">Personal Information</h2>
                <div class="max-w-sm bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg m-0.5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700"> Photo </label>
                        <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                          <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                        </span>
                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
                        </div>
                    </div>
                    <div>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                    <form class="w-full space-y-6 sm:space-y-8" method="POST"
                          action="{{ url('user.update') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Name') }}:
                            </label>

                            <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Confirm Password') }}:
                            </label>

                            <input id="password-confirm" type="password" class="form-input w-full"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-indigo-800 hover:bg-indigo-900 sm:py-4">
                                {{ __('Save Profil') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- section user posts -->
            <div class="col-span-2">
                <h2 class="max-w-sm my-6 font-bold text-lg">All My Posts</h2>
                <!-- buttons -->
                <div class="flex justify-end">
                    <button class="px-5 py-3 mb-3 text-cool-gray-50 font-bold rounded-md bg-indigo-800 hover:bg-indigo-900">Add Post</button>
                </div>
                @for($i=0; $i<3; $i++)
                    <div class="px-4 max-w-xl bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg m-0.5">
                        <div class="flex justify-between">
                            <div class="author flex items-center -ml-3 my-3">
                                <div class="user-logo">
                                    <img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
                                </div>
                                <h2 class="text-sm tracking-tighter text-gray-900">
                                    <a href="#">By Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
                                </h2>
                            </div>
                            <div class="flex">
                                <a href="#" >
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <img class="w-6 h-6 m-2" src="{{ asset('icons/edit.svg') }}">
                                    </svg>
                                </a><a href="#" >
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <img class="w-6 h-6 m-2" src="{{ asset('icons/delete.svg') }}">
                                    </svg>
                                </a>
                            </div>
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
                                <a href="#" class="flex text-gray-700">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                                    </svg>
                                    5
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

