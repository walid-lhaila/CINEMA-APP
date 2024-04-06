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
                <a class="flex items-center px-4 py-2 text-gray-300 transition-colors duration-300 transform  rounded-lg hover:text-orange-500" href="dashboard">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>
                    </svg>


                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-orange-500 transition-colors duration-300 transform rounded-lg hover:text-orange-500" href="users">
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
                    <svg class="w-5 h-5 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                    </svg>


                    <span class="mx-4 font-medium">Cinemas</span>
                </a>

                <a class="flex items-center px-4 py-2 mt-5 text-gray-300 hover:text-orange-500 transition-colors duration-300 transform rounded-lg " href="">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                    </svg>


                    <span class="mx-4 font-medium">Log out</span>
                </a>
            </nav>
        </div>
    </aside>

    <section class="p-5 bg-black w-full">
            <div class="flex gap-2 text-center items-center">
                <svg class="w-9 h-9 text-orange-500 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex text-center items-center mt-2 gap-2">
                    <h1 class="text-3xl text-white font-bold font-mono">Users</h1>
                    <h1 class="text-sm text-gray-300 mt-2">135</h1>
                </div>

        </div>
        <div class="bg-gray-700 w-full h-[1px] mt-4"></div>

        <table class="w-full">
            <thead class="text-white text-sm">
                <th>ID</th>
                <th>FULL NAME</th>
                <th>ADRESS EMAIL</th>
                <th>ROLE</th>
                <th>CREATED DATE</th>
                <th class="py-6">ACTION</th>
            </thead>

            <tbody class="text-white text-md text-center">
            <tr class="bg-zinc-900 ">
                <td>23</td>
                <td class="flex justify-center gap-3 text-center items-center">
                    <svg class="w-9 h-9 text-orange-500 bg-white px-1 py-1 rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    Walid Lhaila
                </td>
                <td>walidlhaila00@gmail.com</td>
                <td>Filmmaker</td>
                <td>24 Oct 2024</td>
                <td class="flex justify-center gap-2 text-center items-center py-5">
                    <img class="w-8 h-8 rounded-md bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" src="{{url('img/baned.svg')}}" alt="">
                    <svg class="w-8 h-8 rounded-md text-red-500 bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                    </svg>
                </td>
            </tr>
            </tbody>


            <tbody class="text-white text-md text-center">
            <tr class="bg-zinc-900 ">
                <td>23</td>
                <td class="flex justify-center gap-3 text-center items-center">
                    <svg class="w-9 h-9 text-orange-500 bg-white px-1 py-1 rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    Walid Lhaila
                </td>
                <td>walidlhaila00@gmail.com</td>
                <td>Filmmaker</td>
                <td>24 Oct 2024</td>
                <td class="flex justify-center gap-2 text-center items-center py-5">
                    <img class="w-8 h-8 rounded-md bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" src="{{url('img/baned.svg')}}" alt="">
                    <svg class="w-8 h-8 rounded-md text-red-500 bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                    </svg>
                </td>
            </tr>
            </tbody>
        </table>

    </section>
</div>
<script src="{{url('js/spinner.js')}}"></script>
