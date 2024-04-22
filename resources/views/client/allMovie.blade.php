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
        <img class="w-[145px] h-[100px]" src="{{url('img/logoW.png')}}" alt="">
    </div>
    <nav class="ml-[-70px] z-10 text-white font-medium flex justify-center items-center text-sm  gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1" href="home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 text-orange-500" href="allMovie">MOVIES</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1" href="ticket">TICKETS</a>
    </nav>
    <div class="z-10">
        <svg class="w-9 h-9 text-white cursor-pointer hover:text-orange-400  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
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

<div class="w-[80%] mt-44 mx-auto">
        <div id="movie-container" class=" w-[80%] mx-auto flex flex-wrap gap-10">


        </div>
</div>



@extends('footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to load movies
        function loadMovies() {
            $.ajax({
                url: "{{ route('getAllMovies') }}",
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
    });
    function gotoDetailsPage(movieId) {
        window.location.href = "{{ url('movieDetails') }}?id=" + movieId;
    }
</script>



