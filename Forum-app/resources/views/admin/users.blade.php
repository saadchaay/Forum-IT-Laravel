@extends('layouts.sidebar')

@section('content')
    <div class="sm:container flex-col justify-start items-center">
        <!-- Modal add user -->
        <div class="transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-2/5 left-0 hidden" id="modal">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4 text-2xl">Add User</h1>
                    <label for="fullName" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Full Name</label>
                    <input id="fullName" class="form-input w-full @error('fullName')  border-red-500 @enderror my-3" />
                    <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                    <input id="email" class="form-input w-full @error('email')  border-red-500 @enderror my-3" />
                    <label for="password" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Password</label>
                    <input id="password" class="form-input w-full @error('password')  border-red-500 @enderror my-3" />
                    <div class="flex items-center justify-start w-full mt-5">
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancel</button>
                    </div>
                    <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                        <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x bg-white" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal confirm delete user -->
        <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-800 hidden" id="confirm-modal">
            <div class="bg-white rounded-lg w-1/2">
                <div class="flex flex-col items-start p-4">
                    <div class="flex items-center w-full">
                        <div class="text-gray-900 font-medium text-lg">Delete User</div>
                        <svg class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" onclick="confirmDelete(false)">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                        </svg>
                    </div>
                    <hr>
                    <div class="">Are you sure, you want to delete this user ?</div>
                    <hr>
                    <div class="ml-auto">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Agree
                        </button>
                        <button class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="confirmDelete(false)">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users table -->
        <div id="body-content" class="sm:container sm:mx-auto sm:mt-1">
            <h2 class="font-bold text-2xl text-blue-900 text-center my-8">Users Management</h2>
            <div class="flex justify-start ml-8">
                <button onclick="modalHandler(true)" class="text-cool-gray-50 bg-blue-900 px-3 py-1.5 font-bold text-base rounded">Add User</button>
            </div>
            <div class="mt-2">
                <table class="max-w-5xl mx-auto table-auto">
                    <thead class="justify-between">
                    <tr class="bg-blue-900 whitespace-no-wrap">
                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">#Id</span>
                        </th>
                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Avatar</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Full Name</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Email</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">Created at</span>
                        </th>

                        <th class="px-16 py-2">
                            <span class="text-gray-100 font-semibold">actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-gray-200">
                    @for($i=0; $i<8; $i++)
                    <tr class="bg-white border-b-2 border-gray-200 text-center">
                        <td class="">
                            <span>1</span>
                        </td>
                        <td class="flex flex-row items-center justify-center">
                            <img class="h-8 w-8 rounded-full object-cover " src="https://randomuser.me/api/portraits/men/30.jpg" alt=""/>
                        </td>
                        <td>
                            <span class="text-center font-semibold">John Doe</span>
                        </td>

                        <td class="">
                            <span>joeDu@gmail.com</span>
                        </td>
                        <td class="">
                            <span>12/22/2021</span>
                        </td>

                        <td class="px-16 py-2">
                              <span class="text-yellow-500 flex">
                                  <a href="#" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mx-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"/>
                                      </svg>
                                  </a>
                                  <a class="cursor-pointer" onclick="confirmDelete(true)">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                     </svg>
                                  </a>
                              </span>
                        </td>
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
