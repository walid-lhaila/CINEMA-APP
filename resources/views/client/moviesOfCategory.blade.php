@extends('header')

<div id="spinner">
    <div class="spinner-border-gray" role="status"></div>
    <div class="spinner-border-orange" role="status"></div>
</div>


<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10 ">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/Nlogo.png')}}" alt="">
    </div>
    <div class="ml-[120px] z-10 text-white font-medium flex justify-center items-center text-sm gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="/home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="/allMovie">MOVIES</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="/ticket">TICKETS</a>
    </div>
    <div class="flex gap-6 text-center items-center">
        <div class="z-10 flex text-center items-center gap-2">
            <svg class="w-8 h-8 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            </svg>
            <h1 class="text-white text-center font-bold font-serif mt-1">{{$user->firstName}} {{$user->lastName}}</h1>
        </div>
        <a href="login"><buton class="font-bold text-white bg-orange-500 font-mono px-4 py-1 hover:bg-red-600 rounded-b-lg hover:rounded-t-lg hover:rounded-b cursor-pointer duration-500">LOG OUT</buton></a>
    </div>
</div>
<div class="relative bg-cover bg-center h-[500px] " style="background-image: url('img/image3.jpg');">
    <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-black z-50 duration-300">
        <div class="flex justify-center items-center">
            <h1 class="text-white  text-5xl font-medium underline">{{$category->name}}</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>
<div class="mt-44 w-[80%] mx-auto">
    <div class="w-[70%] mx-auto">
        <div class="flex flex-wrap gap-5">

            @foreach($movies as $movie)
            <div class="card relative py-2">
                <div class="cursor-pointer  duration-700">
                    <img class="w-[330px] h-[240px]" src="{{$movie->image}}" alt="">
                </div>
                <div class="bg-white shadow-lg w-[93%] mx-auto mt-[-20px] relative">
                    <div class="px-8 py-6">
                        <h1 class="text-lg text-black font-bold font-mono">{{$movie->title}}</h1>
                        <div class="py-2 flex gap-3">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.045 3.007 12.31 3a1.965 1.965 0 0 0-1.4.585l-7.33 7.394a2 2 0 0 0 0 2.805l6.573 6.631a1.957 1.957 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 21 11.479v-5.5a2.972 2.972 0 0 0-2.955-2.972Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                </svg>
                                <p class="text-xs text-gray-500">{{$movie->category->name}}</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-xs text-gray-500">{{$movie->date}}</p>
                            </div>
                        </div>
                        <div class="flex gap-3 mt-1">
                            <a href="{{ url('movieDetails/'.$movie->id) }}" class="text-gray-500 bg-gray-200 text-sm px-3 py-1 hover:text-white hover:bg-orange-500 duration-500 font-medium">Détails</a>
                            <button class="text-gray-500 bg-gray-200 text-sm px-3 py-1 hover:text-white hover:bg-orange-500 duration-500 font-medium">Get Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@extends('footer')
