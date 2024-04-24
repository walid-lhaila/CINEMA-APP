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






<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/Nlogo.png')}}" alt="">
    </div>
    <nav class="z-10 text-white ml-[120px] font-medium flex justify-center items-center text-sm  gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1" href="/home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 text-orange-500" href="/allMovie">MOVIES</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1" href="/ticket">TICKETS</a>
    </nav>

    <div class="flex gap-6 text-center items-center">
        <div class="z-10 flex text-center items-center gap-2">
            <svg class="w-8 h-8 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            </svg>
            <h1 class="text-white text-center font-bold font-serif mt-1">{{$user->firstName}} {{$user->lastName}}</h1>
        </div>
        <a href="login"><buton class="font-bold text-white bg-orange-500 font-mono px-4 py-1 hover:bg-orange-500 rounded-b-lg hover:rounded-t-lg hover:rounded-b cursor-pointer duration-500">LOG OUT</buton></a>
    </div>
</div>
<div class="relative bg-cover bg-center h-[500px] " style="background-image: url('img/image2.jpg');">
    <div class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-black z-50 duration-500">
        <div class="flex justify-center items-center">
            <h1 class="text-white  text-5xl font-medium underline">All Movies</h1>
        </div>
    </div>
</div>

<div class="border-dashed border-4 border-black mt-5 "></div>

<div class="w-[80%] mt-20 mx-auto">

<div class="flex justify-center items-center text-center ">
    <div class="containerInput w-[500px]">
        <div class="search-container">
            <input class="input" id="searchInput" type="text" name="search" placeholder="Search movies" value="{{ app('request')->input('search') }}">
            <svg viewBox="0 0 24 24" class="search__icon">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                </g>
            </svg>
        </div>
    </div>
</div>

        <div id="movie-container" class=" w-[80%] mx-auto flex flex-wrap gap-10 mt-20">


        </div>
</div>



@extends('footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to load movies
        function loadMovies(searchTerm = null) {
            let url = "{{ route('getAllMovies') }}";
            if (searchTerm) {
                url = `/movies?search=${searchTerm}`;
            }

            $.ajax({
                url: url,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.length > 0) {
                        var movieContainer = $('#movie-container');
                        movieContainer.empty();
                        $.each(response, function (index, movie) {
                            var movieCard = `
                                <div class="relative cursor-pointer bg-cover bg-center w-[260px] h-[350px] group overflow-hidden">
                                    <img src="${movie.image}" alt="Image" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out transform scale-100 group-hover:scale-110">
                                    <div class="absolute inset-0 rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out cursor-pointer from-black/80 to-transparent bg-gradient-to-t -bottom-2 pt-30 text-white flex items-end">
                                        <div class="transform-gpu p-4 w-[230px] space-y-3 text-xl group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-500 ease-in-out">
                                            <div class="w-full ml-[-16px]">
                                                <div class="flex justify-end">
                                                    <button onclick="gotoDetailsPage(${movie.id})" class="bg-orange-400 px-2 text-sm text-white hover:bg-black py-1 duration-500 mt-2">Détails</button>
                                                </div>
                                                <h1 class="bg-white w-full text-black py-1 text-center">${movie.title}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                            movieContainer.append(movieCard);
                        });
                    } else {
                        $('#movie-container').html("<h2>No movies found</h2>");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }

        // Initial load
        loadMovies();

        // Load movies every 10 seconds
        setInterval(loadMovies, 10000);

        // Search movies on keyup
        $('#searchInput').keyup(function (e) {
            e.preventDefault();
            let searchTerm = $(this).val();
            loadMovies(searchTerm);
        });

    });
    function gotoDetailsPage(movieId) {
        window.location.href = "{{ url('movieDetails') }}/" + movieId;
    }
</script>



