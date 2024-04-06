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
    <nav class="ml-[-70px] z-10 text-white font-medium flex justify-center items-center text-sm gap-5">
        <a class="hover:text-orange-500 duration-500 hover:mt-1 text-orange-500" href="home">HOME</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="allMovie">MOVIES</a>
        <a class="hover:text-orange-500 duration-500 hover:mt-1 " href="ticket">TICKETS</a>
    </nav>
    <div class="z-10">
        <svg class="w-9 h-9 text-white cursor-pointer hover:text-orange-400  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
    </div>
</div>
<div class="relative bg-cover bg-center h-[600px] " style="background-image: url('img/image4.jpg');">
    <div class="absolute w-full h-full inset-0  backdrop-filter backdrop-blur-md  items-center bg-gradient-to-l from-black z-50 duration-300">
        <div class="container flex justify-center gap-44 w-[100%] mx-auto">

            <div class="w-[50%] p-10 mt-44">
                <div class="flex justify-between">
                    <div>
                        <h1 class="text-white  text-4xl font-bold font-serif">WHAT'S ON <span class="text-orange-500">TODAY</span></h1>
                    </div>
                    <div>
                        <h1 class="text-white  text-lg font-medium italic mt-8">AT MOVIEZONE CINEMA & THEATRES!</h1>
                        <h1 class="text-gray-400  text-sm font-mono">All reserved seating – Choose your exact seat!</h1>

                    </div>
                </div>
                <div class="flex justify-center items-center py-10">
                    <button class="bg-gradient-to-l from-orange-500 via-orange-600 to-orange-500 px-3 py-2 hover:bg-orange-200 rounded-2xl font-bold text-md text-white">DISCOVER NOW!</button>
                </div>
            </div>



            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <div class="relative bg-center w-[220px] h-[300px]  duration-500 group overflow-hidden">
                                <img src="{{url('img/zombie10.jpg')}}" alt="Image" class="absolute inset-0 w-full h-full object-cover ">
                                <div class="absolute inset-0  z-50 opacity-100 from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                                        <div class="w-full px-3">
                                            <p class="text-gray-300 text-xs ">Thriller / 180 Mins</p>
                                            <h1 class="text-white font-bold text-sm font-mono py-2">The Scariest Dream</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>                           </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <div class="relative bg-center w-[220px] h-[300px]  duration-500 group overflow-hidden">
                                <img src="{{url('img/zombie2.jpg')}}" alt="Image" class="absolute inset-0 w-full h-full object-cover ">
                                <div class="absolute inset-0  z-50 opacity-100 from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                                        <div class="w-full px-3">
                                            <p class="text-gray-300 text-xs ">Thriller / 180 Mins</p>
                                            <h1 class="text-white font-bold text-sm font-mono py-2">The Scariest Dream</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>                           </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <div class="relative bg-center w-[220px] h-[300px]  duration-500 group overflow-hidden">
                                <img src="{{url('img/crime3.jpg')}}" alt="Image" class="absolute inset-0 w-full h-full object-cover ">
                                <div class="absolute inset-0  z-50 opacity-100 from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                                        <div class="w-full px-3">
                                            <p class="text-gray-300 text-xs ">Thriller / 180 Mins</p>
                                            <h1 class="text-white font-bold text-sm font-mono py-2">The Scariest Dream</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>                           </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <div class="relative bg-center w-[220px] h-[300px]  duration-500 group overflow-hidden">
                                <img src="{{url('img/zombie7.jpg')}}" alt="Image" class="absolute inset-0 w-full h-full object-cover ">
                                <div class="absolute inset-0  z-50 opacity-100 from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                                        <div class="w-full px-3">
                                            <p class="text-gray-300 text-xs ">Thriller / 180 Mins</p>
                                            <h1 class="text-white font-bold text-sm font-mono py-2">The Scariest Dream</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>                           </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <div class="relative bg-center w-[220px] h-[300px]  duration-500 group overflow-hidden">
                                <img src="{{url('img/sport2.jpg')}}" alt="Image" class="absolute inset-0 w-full h-full object-cover ">
                                <div class="absolute inset-0  z-50 opacity-100 from-black/80 to-transparent bg-gradient-to-t pt-30 text-white flex items-end">
                                    <div class="transform-gpu p-4 w-[260px] space-y-3 text-xl pb-10 transform transition duration-500 ease-in-out">
                                        <div class="w-full px-3">
                                            <p class="text-gray-300 text-xs ">Thriller / 180 Mins</p>
                                            <h1 class="text-white font-bold text-sm font-mono py-2">The Scariest Dream</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="">
                    <div class="swiper-button-prev">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                        <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <svg class="w-6 h-6 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                        </svg>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="flex justify-between items-center mt-24">
    <div class="border-dotted border-8 border-gray-200 w-[40%]"></div>
    <div class="px-3 text-center">
        <h1 class="text-4xl text-black font-bold font-serif ">Top movies in <span class="text-orange-500">theatres</span></h1>
        <p class="text-gray-700 text-sm ">at Moviak Cinema & Theatre</p>
    </div>
    <div class="border-dotted border-8 border-gray-200 w-[40%]"></div>
</div>



    <div class="flex mt-44">
        <div class="relative bg-cover bg-center h-[500px] w-[50%]" style="background-image: url('img/image11.jpg');">
            <div class="flex justify-start mt-[-209px] -ml-28">
                <img class="w-[700px] h-[700px]" src="{{url('img/promotion.png')}}" alt="">
            </div>
        </div>
        <div class="relative bg-cover bg-center h-[500px] w-[50%]" style="background-image: url('img/image9.jpg');">
            <div class="bg-red-600 opacity-80 flex justify-center left-0 items-center h-[50%] mt-28 w-[75%]">
                <div class="p-8">
                    <h1 class="text-white text-3xl font-bold">BUY ONE GET ONE FREE</h1>
                    <h1 class="text-white text-3xl font-bold">ON <span class="text-orange-500 text-4xl font-bold">MOVIE TICKETS</span>AND <span class="text-orange-500 text-4xl font-bold">POPCORN</span></h1>
                </div>
            </div>
        </div>
    </div>


<div class="flex justify-between items-center mt-24">
    <div class="border-dotted border-8 border-gray-200 w-[40%]"></div>
    <div class="px-3 text-center">
        <h1 class="text-4xl text-black font-bold font-serif ">Event & blog Cinemas</h1>
        <p class="text-gray-700 text-sm ">This is a great space to write long text about your company</p>
    </div>
    <div class="border-dotted border-8 border-gray-200 w-[40%]"></div>
</div>

<div class="w-[80%] mt-24 mx-auto">
    <div class="w-[80%] mx-auto">
        <div class="grid grid-rows-2 grid-flow-col h-[600px] gap-5">
            <div class="w-[280px] text-center">
                <img class="h-[210px] w-[280px]" src="{{url('img/image8.jpg')}}" alt="">
                <h1 class="text-md py-2 text-black font-bold font-mono">Six book-to-film adaptations to get excited about this autumn</h1>
            </div>
            <div class="w-[280px] h-[280px] text-center">
                <img class="h-[210px] w-[280px]" src="{{url('img/company4.jpg')}}" alt="">
                <h1 class="text-md py-2 text-black font-bold font-mono">Six book-to-film adaptations to get excited about this autumn</h1>
            </div>
            <div class="grid grid-rows-subgrid gap-4 row-span-2 text-center">
                <div>
                    <img class="w-[700px] h-[500px]" src="{{url('img/company2.jpg')}}" alt="">
                    <h1 class="text-lg text-black font-bold font-mono py-2">Six book-to-film adaptations to get excited about this autumn</h1>
                </div>
            </div>
            <div class="w-[280px] h-[200px] text-center">
                <img class="h-[210px] w-[280px]" src="{{url('img/company5.jpg')}}" alt="">
                <h1 class="text-md py-2 text-black font-bold font-mono">Six book-to-film adaptations to get excited about this autumn</h1>
            </div>
            <div class="w-[280px] h-[280px] text-center">
                <img class="h-[210px] w-[280px]" src="{{url('img/company7.jpg')}}" alt="">
                <h1 class="text-md py-2 text-black font-bold font-mono">Six book-to-film adaptations to get excited about this autumn</h1>
            </div>
        </div>
    </div>
</div>



@extends('footer')

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="{{url('js/script.js')}}"></script>
