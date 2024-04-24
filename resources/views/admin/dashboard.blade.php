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


<div class="flex">
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
            <div id="dashboard" class="flex items-center px-4 py-2 text-orange-500 rounded-lg cursor-pointer">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>
                </svg>


                <span class="mx-4 font-medium">Dashboard</span>
            </div>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 transition-colors duration-300 transform rounded-lg hover:text-orange-500" href="users">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Users</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300 transform rounded-lg " href="categories">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Categories</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300 transform rounded-lg " href="movies">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
                </svg>


                <span class="mx-4 font-medium">Movies</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300 transform rounded-lg " href="cinemas">
                <svg class="w-5 h-5 "aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                </svg>


                <span class="mx-4 font-medium">Cinemas</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300  rounded-lg " href="rooms">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                </svg>


                <span class="mx-4 font-medium">Rooms</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300 transform rounded-lg " href="login">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                </svg>


                <span class="mx-4 font-medium">Log out</span>
            </a>
        </nav>
    </div>
</aside>

    <section class="bg-black w-full px-5 py-2.5 overflow-y-hidden">
        <div class="text-center flex gap-3 items-center">
            <svg class="w-9 h-9 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>
            </svg>
            <h1 class="text-3xl text-white font-bold font-mono mt-1">Dashboard</h1>
        </div>
        <div class="bg-gray-700 w-full h-[1px] mt-5"></div>
            <div class="flex flex-wrap items-center mt-6 gap-5">
                <div class="bg-gradient-to-t from-zinc-900  rounded-lg w-[24%]">
                        <div class="p-4">
                            <h1 class="text-white text-2xl font-medium">Users</h1>
                            <div class= "flex justify-between mt-2 px-2">
                                <h1 id="user-count" class="text-white font-medium text-2xl"></h1>
                                <svg class="w-8 h-8 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>
                            </div>
                        </div>
                </div>
                <div class="bg-gradient-to-t from-zinc-900 rounded-lg w-[24%]">
                        <div class="p-4">
                            <h1 class="text-white text-2xl font-medium">Cinemas</h1>
                            <div class= "flex justify-between mt-2 px-2">
                                <h1 id="cinema-count" class="text-white font-medium text-2xl"></h1>
                                <svg class="w-8 h-8 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                                </svg>
                            </div>
                        </div>
                </div>
                <div class="bg-gradient-to-t from-zinc-900  rounded-lg w-[24%]">
                        <div class="p-4">
                            <h1 class="text-white text-2xl font-medium">Categories</h1>
                            <div class= "flex justify-between mt-2 px-2">
                                <h1 id="category-count" class="text-white font-medium text-2xl">0</h1>
                                <svg class="w-8 h-8 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                </div>
                <div class="bg-gradient-to-t from-zinc-900 rounded-lg w-[24%]">
                        <div class="p-4">
                            <h1 class="text-white text-2xl font-medium">Movies</h1>
                            <div class= "flex justify-between mt-2 px-2">
                                <h1 id="movie-count" class="text-white font-medium text-2xl">0</h1>
                                <svg class="w-8 h-8 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
                                </svg>
                            </div>
                        </div>
                </div>
            </div>

        <div class="flex flex-wrap gap-5 py-6">

            <div class="bg-gradient-to-t from-zinc-900  rounded-lg w-[49.3%]">
                    <div class="flex justify-between items-center p-5">
                        <div class="flex gap-3 items-center">
                            <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <h1 class="text-xl text-white font-bold font-serif">Latest Users</h1>
                        </div>
                        <div class="flex gap-3 items-center">
                            <svg class="w-4 h-4 text-white hover:text-orange-500 cursor-pointer duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                            </svg>

                            <button class="bg-black px-2 py-1 text-white text-sm font-medium hover:text-orange-500 duration-500 rounded-xl">View All</button>
                        </div>
                    </div>
                <div class="bg-gray-700 w-full h-[1px] "></div>

                <div class="p-2">
                    <table class="w-full text-center">
                        <thead class="text-gray-200 text-sm border-b border-gray-700">
                            <th>ID</th>
                            <th>FULL NAME</th>
                            <th>EMAIL</th>
                            <th class="py-3">ROLE</th>
                        </thead>

                        <tbody id="latest-users" class="text-md text-white">

                        </tbody>

                    </table>
                </div>
            </div>


            <div class="bg-gradient-to-t from-zinc-900 rounded-lg w-[49.3%]">
                <div class="flex justify-between items-center p-5">
                    <div class="flex gap-3 items-center">
                        <svg class="w-5 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1Zm0 0-4 4m5 0H4m1 0 4-4m1 4 4-4m-4 7v6l4-3-4-3Z"/>
                        </svg>
                        <h1 class="text-xl text-white font-bold font-serif">Latest Movies</h1>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg class="w-4 h-4 text-white hover:text-orange-500 cursor-pointer duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                        </svg>

                        <button class="bg-black px-2 py-1 text-white text-sm font-medium hover:text-orange-500 duration-500 rounded-xl">View All</button>
                    </div>
                </div>
                <div class="bg-gray-700 w-full h-[1px] "></div>

                <div class="p-2">
                    <table class="w-full text-center">
                        <thead class="text-gray-200 text-sm border-b border-gray-700">
                        <th>ID</th>
                        <th>FULL NAME</th>
                        <th>EMAIL</th>
                        <th class="py-3">ROLE</th>
                        </thead>

                        <tbody id="latest-movies" class="text-md text-white">

                        </tbody>


                    </table>
                </div>
            </div>




            <div class="bg-gradient-to-t from-zinc-900  rounded-lg w-[49.3%]">
                <div class="flex justify-between items-center p-5">
                    <div class="flex gap-3 items-center">
                        <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                        </svg>
                        <h1 class="text-xl text-white font-bold font-serif">Latest Cinemas</h1>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg class="w-4 h-4 text-white hover:text-orange-500 cursor-pointer duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                        </svg>

                        <button class="bg-black px-2 py-1 text-white text-sm font-medium hover:text-orange-500 duration-500 rounded-xl">View All</button>
                    </div>
                </div>
                <div class="bg-gray-700 w-full h-[1px] "></div>

                <div class="p-2">
                    <table class="w-full text-center">
                        <thead class="text-gray-200 text-sm border-b border-gray-700">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th class="py-3">CREATED</th>
                        </thead>

                        <tbody id="latest-cinemas"  class="text-md text-white">

                        </tbody>

                    </table>
                </div>
            </div>




            <div class="bg-gradient-to-t from-zinc-900  rounded-lg w-[49.3%]">
                <div class="flex justify-between items-center p-5">
                    <div class="flex gap-3 items-center">
                        <svg class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h1 class="text-xl text-white font-bold font-serif">Latest Categories</h1>
                    </div>
                    <div class="flex gap-3 items-center">
                        <svg class="w-4 h-4 text-white hover:text-orange-500 cursor-pointer duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                        </svg>

                        <button class="bg-black px-2 py-1 text-white text-sm font-medium hover:text-orange-500 duration-500 rounded-xl">View All</button>
                    </div>
                </div>
                <div class="bg-gray-700 w-full h-[1px] "></div>

                <div class="p-2">
                    <table class="w-full text-center">
                        <thead class="text-gray-200 text-sm border-b border-gray-700">
                        <th>ID</th>
                        <th>NAME</th>
                        <th class="py-3">CREATED</th>
                        </thead>

                        <tbody id="latest-categories" class="text-md text-white">

                        </tbody>

                    </table>
                </div>
            </div>




        </div>
    </section>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{url('js/spinner.js')}}"></script>
<script src="{{url('js/dashboard.js')}}"></script>
<script src="{{url('js/sideBar.js')}}"></script>

