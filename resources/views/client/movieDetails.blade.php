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
<div class="relative bg-no-repeat bg-cover bg-center h-[500px] " style="background-image: url('img/image7.jpg');">
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
            <h1 class="text-white  text-5xl font-medium underline">Movie Détails</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>

<div class="w-[80%] mt-44 mx-auto">
    <div class="w-[80%] mx-auto">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-black font-bold font-mono text-3xl py-2">{{ $movie->title }}</h1>
                <p class="text-gray-500 text-md">{{$movie->category->name}} / 1 Day</p>
            </div>
            <div>
                @if(\Carbon\Carbon::parse($movie->date)->isPast())
                    <p class="text-red-500 font-bold font-serif text-lg">This movie was already finished</p>
                @else
                <form action="{{ route('addReservation', $movie->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white bg-orange-500 font-medium text-md hover:bg-orange-400 px-10 py-2">
                        Get Ticket
                    </button>
                </form>
                @endif
            </div>
        </div>
        <div class="flex gap-10 items-center mt-5">
            <div class="">
                <img class="h-[450px] w-[330px]" src="{{$movie->image}}" alt="">
            </div>
            <div class="">
                <video id="myVideo" class="w-[850px] h-[450px] object-cover" controls autoplay muted>
                    <source src="{{$movie->trailer}}" type="video/mp4">
                </video>
            </div>
        </div>

    <div class="w-[50%] flex justify-between items-center mt-10">
        <div>
            <h1 class="text-black font-bold  text-md font-serif">Category: <span class="px-10 text-gray-600 text-sm">{{$movie->category->name}}</span></h1>
            <h1 class="text-black font-bold  text-md font-serif py-3">Filmmaker: <span class="px-7 text-gray-600 text-sm">Lhaila <Walid></Walid></span></h1>
            <h1 class="text-black font-bold text-md font-serif">Cinéma: <span class="px-12 text-gray-600 text-sm">{{$movie->cinema->name}}</span></h1>
        </div>
        <div>
            <h1 class="text-black font-bold  text-md font-serif">Date: <span class="px-8 text-gray-600 text-sm">{{ \Carbon\Carbon::parse($movie->date)->format('d M Y') }}</span></h1>
            <h1 class="text-black font-bold text-md font-serif py-3">Time: <span class="px-7 text-gray-600 text-sm">1 Day</span></h1>
            <h1 class="text-black font-bold text-md font-serif">Seats: <span class="px-8 text-gray-600 text-sm">{{$movie->room->seats}}</span></h1>
        </div>
    </div>
        <div class="w-full h-[2px] bg-gray-300 mt-10"></div>
            <h1 class="text-black font-bold text-2xl  italic py-6">Story Line</h1>
                <p class="text-gray-500 text-sm">{{$movie->description}}</p>

        <h1 class="text-black font-bold text-2xl  italic py-8">More Movies Like This</h1>

        <div class="flex flex-wrap gap-10 mt-10">
            @foreach($movies as $movie)
            <div class="relative cursor-pointer bg-cover bg-center w-[274px] h-[360px] border-4 border-white hover:border-orange-500 duration-500 group overflow-hidden">
                <img src="{{$movie->image}}" alt="Image" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out transform scale-100 group-hover:scale-110">
                <div class="absolute inset-0 rounded-xl z-50 opacity-100 transition duration-500 ease-in-out cursor-pointer from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                        <div class="w-full px-3">
                            <p class="text-gray-300 text-xs ">{{$movie->category->name}}/ 180 Mins</p>
                            <h1 class="text-white font-bold text-sm font-mono py-2">{{$movie->title}}</h1>
                            <a href="{{ url('movieDetails') }}/{{ $movie->id }}" class="bg-orange-400 px-2 text-sm text-white hover:bg-black py-1 duration-500 mt-2">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




    </div>

    </div>
</div>

@extends('footer')

<script>
    var video = document.getElementById("myVideo");
    function replayVideo() {
        video.currentTime = 0;
        video.play();
    }

    video.addEventListener("ended", function() {
        replayVideo();
    });
</script>

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

