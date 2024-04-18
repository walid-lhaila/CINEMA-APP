@extends('header')

<style>
    #spinner {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: black;

    }

    .spinner-border-gray {
        width: 4rem;
        height: 4rem;
        border: 4px solid #ff6613;
        border-radius: 50%;
        border-color: #ff6613 transparent transparent transparent;
        animation: spin-gray 0.6s linear infinite;
    }

    .spinner-border-orange {
        position: absolute;
        width: 3rem;
        height: 3rem;
        border: 4px solid #bbbbbb;
        border-radius: 50%;
        border-color: #bbbbbb transparent transparent transparent;
        animation: spin-orange 0.6s linear infinite;
    }

    @keyframes spin-gray {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-orange {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(-360deg);
        }
    }

</style>


<div id="spinner">
    <div class="spinner-border-gray" role="status"></div>
    <div class="spinner-border-orange" role="status"></div>
</div>

@if (session('success'))
    <div class="alert alert-success hidden">
        {{ session('success') }}
    </div>
@endif


<div class="flex relative">

    <div id="form" class="absolute bg-black w-full scale-0 duration-300 h-screen opacity-100">
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="  flex flex-col overflow-y-auto overflow-x-hidden fixed  z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-gray-200 rounded-lg shadow  w-[500px]">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-black">
                            Create New Room
                        </h3>
                        <button id="close" type="button" class="text-gray-600 bg-transparent hover:bg-zinc-600 duration-300 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('roomStore') }}" method="post" id="roomForm" class="p-4 md:p-5">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="seats" class="block mb-2 text-sm font-medium text-black">Seats</label>
                                <input type="number" name="seats" id="seats" class=" border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-2.5  dark:placeholder-gray-400 " min="10" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="cinema_id" class="block mb-2 text-sm font-medium text-black">Cinema</label>
                                <select name="cinema_id" id="cinema_id" class="border text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-2.5 bg-white" required>
                                    <!-- You can add options dynamically here -->
                                    <option value="" disabled selected>Select Cinema</option>
                                    @foreach($cinemas as $cinema)
                                    <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-orange-500 hover:bg-orange-600  duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center ">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new Room
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <aside class="flex flex-col w-[320px] h-screen overflow-x-hidden overflow-y-auto bg-black border-r rtl:border-r-0 rtl:border-l  dark:border-gray-700">
        <a href="#" class="mx-auto">
            <img class="w-36 h-28" src="{{url('img/Nlogo.png')}}" alt="">
        </a>
        <div class="bg-gray-700 w-full h-[1px]"></div>

        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-16 h-16 mx-2 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200">John Doe</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">Admin</p>
        </div>

        <div class="bg-gray-700 w-full h-[1px] mt-5"></div>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a class="flex items-center px-4 py-2 text-gray-300 transition-colors duration-300   rounded-lg hover:text-orange-500" href="dashboard">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>
                    </svg>


                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 transition-colors duration-300  rounded-lg hover:text-orange-500" href="users">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Users</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="categories">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="mx-4 font-medium">Categories</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="movies">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
                    </svg>


                    <span class="mx-4 font-medium">Movies</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="cinemas">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                    </svg>


                    <span class="mx-4 font-medium">Cinemas</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-orange-500 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="rooms">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                    </svg>


                    <span class="mx-4 font-medium">Rooms</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="#">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                    </svg>


                    <span class="mx-4 font-medium">Log out</span>
                </a>

            </nav>
        </div>
    </aside>

    <section class="p-5 bg-black w-full">
        <div class="flex justify-between items-center text-center">
            <div class="flex gap-3 text-center items-center">
                <svg class="w-9 h-9 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h1 class="text-3xl text-white font-bold font-mono mt-1">Rooms</h1>
            </div>
            <button id="btn" class="text-white bg-orange-500 hover:bg-orange-600 font-bold text-sm px-3 py-2 rounded-lg duration-500">Add Room</button>
        </div>
        <div class="bg-gray-700 w-full h-[1px] mt-4"></div>

        <div id="room-container" class="mt-7 flex flex-wrap gap-5">

        </div>


    </section>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{url('js/form.js')}}"></script>
<script src="{{url('js/spinner.js')}}"></script>
<script src="{{url('js/room.js')}}"></script>

