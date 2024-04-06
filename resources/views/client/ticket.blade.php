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



<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/logoW.png')}}" alt="">
    </div>
    <nav class="ml-[-70px] z-10 text-white font-medium flex justify-center items-center text-sm gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="allMovie">MOVIES</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 text-orange-500" href="ticket">TICKETS</a>
    </nav>
    <div class="z-10">
        <svg class="w-9 h-9 text-white cursor-pointer hover:text-orange-400  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
    </div>
</div>
<div class="relative bg-cover bg-center h-[500px] " style="background-image: url('img/image1.jpg');">
    <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-black z-50 duration-300">
        <div class="flex justify-center items-center">
            <h1 class="text-white  text-5xl font-medium underline">Your Ticket</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>

<div class="w-[80%] mt-44 mx-auto">
    <div class="w-[70%] mx-auto">
        <div class="flex flex-wrap gap-5">
            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/crime1.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                        <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>

            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/crime2.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                    <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>

            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/sport4.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                    <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>


            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/zombie9.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                    <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>

            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/sport3.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                    <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>

            <div class="w-[330px] bg-gray-200 rounded-md" >
                <div class="flex justify-between items-center ">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
                <div class="px-5 py-3 mt-3">
                    <h1 class="text-gray-700 text-xl font-mono font-bold">Cinema Roxy</h1>
                    <h1 class="text-black text-4xl font-serif font-bold">GOD OF WAR</h1>
                </div>
                <div>
                    <img class="w-full h-[300px]" src="{{url('img/crime5.jpg')}}" alt="">
                </div>
                <div class="mt-4 px-5 flex justify-center justify-between items-center ">
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">PRICE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">$12.00</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">DATE</h1>
                        <h1 class="text-sm text-black font-mono font-bold">01/13/24</h1>
                    </div>
                    <div>
                        <h1 class="text-xs font-bold font-serif text-black">TIME</h1>
                        <h1 class="text-sm text-black font-mono font-bold">180 MINS</h1>
                    </div>
                </div>
                <div class="flex mt-5 justify-between items-center">
                    <div class="w-[20px] h-[30px] rounded-tr-xl rounded-br-xl bg-white"></div> <!-- Left semicircle -->
                    <div class="border-dashed border-2 border-black flex-grow"></div> <!-- Dashed border -->
                    <div class="w-[20px] h-[30px] rounded-tl-xl rounded-bl-xl bg-white"></div> <!-- Right semicircle -->
                </div>
                <div class="py-5 flex justify-center items-center">
                    <button class="bg-orange-500 text-white px-4 py-1 font-medium text-sm font-mono hover:mt-1 duration-500 ">Download</button>
                </div>
                <div class="flex justify-between items-center mt-5">
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-lg"></div>
                    <div class="bg-white w-[30px] h-[30px] rounded-md"></div>
                </div>
            </div>

        </div>
    </div>
</div>


@extends('footer')


