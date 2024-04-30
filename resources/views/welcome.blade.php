@extends('header')
<style>
    #spinner {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
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
<header>
    <nav x-data="{ isOpen: false }" class="bg-black shadow h-[100px]">
        <div class="container px-6 py-1 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                        <img class="w-[120px] h-[90px]" src="{{url('img/Nlogo.png')}}" alt="">

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white shadow-md lg:bg-transparent lg:dark:bg-transparent lg:shadow-none dark:bg-gray-900 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:w-auto lg:opacity-100 lg:translate-x-0">
                    <div class="-mx-4 lg:flex gap-4 lg:items-center">
                        <a href="login"><buton class="font-bold text-orange-500 bg-white font-mono px-5 py-2 hover:bg-orange-500 hover:text-white border border-orange-500 cursor-pointer duration-500">SIGN IN</buton></a>
                        <a href="register"><buton class="font-bold text-orange-500 bg-white font-mono px-5 py-2 hover:bg-orange-500 hover:text-white border border-orange-500 cursor-pointer duration-500">SIGN UP</buton></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full bg-center bg-cover h-[54.1rem] brightness-90" style="background-image: url('img/landing.jpg');">
        <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
            <div class="text-center">
                <h1 class="text-white font-bold font-serif text-6xl">Streamline your cinema experience with our intuitive reservation management system, making booking tickets effortless.</h1>
                <a href="login"><button class="w-full px-10 py-3 mt-4 text-sm font-medium text-white capitalize transition-colors duration-300 transform bg-orange-600 rounded-md lg:w-auto hover:bg-orange-500 focus:outline-none focus:bg-blue-500">Get Started</button></a>
            </div>
        </div>
    </div>
</header>
<script src="{{url('js/spinner.js')}}"></script>
