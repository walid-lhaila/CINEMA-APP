@extends('header')

<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/Nlogo.png')}}" alt="">
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


<div class="relative bg-cover bg-center h-[500px] " style="background-image: url('img/image5.jpg');">
    <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex flex-col justify-center items-center bg-black z-50 duration-300">

        @if(session('success'))
        <div id="successMessage"  class="flex w-full max-w-sm overflow-hidden bg-green-100  rounded-lg shadow-md ">
            <div class="flex items-center justify-center w-12 bg-emerald-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success!</span>
                    <p class="text-sm text-gray-800 ">{{ session('success') }}</p>
                </div>
            </div>
        </div>
        @endif


        <div class="flex justify-center items-center py-28">
            <h1 class="text-white  text-5xl font-medium underline">My Movies</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>

<div class="flex justify-end px-6 py-5">
    <a href="formAddMovie"><button class="bg-orange-500 text-white text-lg rounded-md font-bold px-3 py-1 hover:bg-orange-600 duration-300">Add Movie</button></a>
</div>

<div class="w-[80%] mt-28 mx-auto">
    <div class=" w-[80%] mx-auto">

        @isset($movies)
            @foreach($movies as $movie)
                <div class=" ">
                    <div class="flex gap-5 items-center">
                        <div><img class="h-[300px] w-[300px] rounded-md mt-5" src="{{$movie->image}}" alt=""></div>
                        <div>
                            <p class="text-orange-500 text-xl font-medium font-mono mt-2">{{$movie->category->name}}</p>
                            <p class="text-black text-3xl font-bold font-serif py-3">{{$movie->title}}</p>
                            <p class="text-gray-400 text-sm mt-5 font-mono">{{$movie->description}}</p>
                            <p class="text-orange-400 text-md font-medium mt-5">Cinema: <span class="px-2">{{$movie->cinema->name}}</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 justify-end px-5 py-2">
                        <p class="text-gray-400 text-sm">{{$movie->created_at->format('d M Y')}}</p>
                        <p class="text-white text-sm font-bold bg-orange-500 px-2 py-2 rounded-full">{{$movie->id}}</p>
                    </div>
                    <div class="w-full h-[2px] bg-gray-300 "></div>
                </div>
            @endforeach
                {{ $movies->links() }}


        @else
            <div class="text-center text-2xl text-gray-600 mt-5">No movies found</div>
        @endisset


    </div>
</div>
<script>
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        if(successMessage) {
            successMessage.classList.add('scale-0');
            setTimeout(function() {
                successMessage.remove();
            }, 1000);
        }
    }, 6000);
</script>
