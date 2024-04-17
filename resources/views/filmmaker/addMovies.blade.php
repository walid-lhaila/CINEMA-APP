@extends('header')


<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/Nlogo.png')}}" alt="">
    </div>
    <nav class="ml-[-70px] z-10 text-white font-medium flex justify-center items-center text-sm  gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1 text-orange-500" href="home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="allMovie">MOVIES</a>
    </nav>
    <div class="z-10">
        <svg class="w-9 h-9 text-white cursor-pointer hover:text-orange-400 duration-500 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
    </div>
</div>
<div class="relative bg-cover bg-center h-[500px] " style="background-image: url('img/image5.jpg');">
    <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-black z-50 duration-300">
        <div class="flex justify-center items-center">
            <h1 class="text-white  text-5xl font-medium underline">My Movies</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>

<div class="flex justify-end px-6 py-5">
    <button class="bg-orange-500 text-white text-lg rounded-md font-bold px-3 py-1 hover:bg-orange-600 duration-300">Add Movie</button>
</div>

<div class="w-[80%] mt-28 mx-auto">
    <div class=" w-[80%] mx-auto">

        <div class="py-5 ">
            <div class="flex gap-5 items-center">
                <div><img class="h-[230px] w-[480px] rounded-md" src="{{url('img/zombie9.jpg')}}" alt=""></div>
                <div>
                    <p class="text-orange-500 text-xl font-medium font-mono mt-2">Thriller</p>
                    <p class="text-black text-3xl font-bold font-serif py-3">Infinite Vengeance</p>
                    <p class="text-gray-400 text-sm mt-5 font-mono">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    <p class="text-orange-400 text-md font-medium mt-5">Cinema: <span class="px-2">Roxy</span></p>
                </div>
            </div>
            <div class="flex items-center gap-4 justify-end px-5">
                <p class="text-gray-400 text-sm">130 MINS</p>
                <p class="text-white text-sm font-bold bg-orange-500 px-2 py-2 rounded-full">10</p>
            </div>
            <div class="w-full h-[2px] bg-gray-300 mt-5"></div>
        </div>

        <div class="py-5 ">
            <div class="flex gap-5 items-center">
                <div><img class="h-[230px] w-[480px] rounded-md" src="{{url('img/tennis.jpg')}}" alt=""></div>
                <div>
                    <p class="text-orange-500 text-xl font-medium font-mono mt-2">Sport</p>
                    <p class="text-black text-3xl font-bold font-serif py-3">Infinite Vengeance</p>
                    <p class="text-gray-400 text-sm mt-5 font-mono">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    <p class="text-orange-400 text-md font-medium mt-5">Cinema: <span class="px-2">Tokyo</span></p>
                </div>
            </div>
            <div class="flex items-center gap-4 justify-end px-5">
                <p class="text-gray-400 text-sm">130 MINS</p>
                <p class="text-white text-sm font-bold bg-orange-500 px-2 py-2 rounded-full">11</p>
            </div>
            <div class="w-full h-[2px] bg-gray-300 mt-5"></div>
        </div>


    </div>
</div>
