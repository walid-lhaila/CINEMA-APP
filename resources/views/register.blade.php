@extends('header')

<section class="bg-gradient-to-b from-gray-100 ">
    <div class="flex justify-center min-h-screen">
        <div class=" bg-cover w-[1100px]" style="background-image: url('img/register.jpg')">

        </div>

        <div class="flex items-center w-full max-w-3xl px-8 mx-auto lg:px-12 lg:w-3/5">


            <div class="w-full">
                <div class="flex justify-center items-center h-56">
                    <img class="w-[260px] " src="{{url('img/logo.png')}}" alt="">
                </div>
                <h1 class="text-3xl font-semibold tracking-wider text-gray-800 capitalize">
                    Get your free account now.
                </h1>

                <p class="mt-4 text-gray-500 ">
                    Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                </p>

                <div class="mt-6">
                    <h1 class="text-gray-400 ">Select type of account</h1>

                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                        <button id="client-btn" class="flex justify-center w-full px-6 py-3 text-orange-400 border border-orange-400 rounded-lg md:w-auto md:mx-2 focus:outline-none focus:bg-orange-400 focus:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="mx-2">
                                Client
                            </span>
                        </button>

                        <button id="filmmaker-btn" class="flex justify-center w-full px-6 py-3 mt-4 text-orange-400 border border-orange-400 rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-orange-400 dark:text-orange-400 focus:bg-orange-400 focus:text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>

                            <span class="mx-2">
                                Filmmaker
                            </span>
                        </button>
                    </div>
                </div>


                <div id="forms-container" class="flex overflow-hidden transition-transform transform ease-in-out duration-500">
                    <div id="clientForm" class="w-full">
                        <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2 ">
                            @csrf
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">First Name</label>
                                <input name="fname" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-300   bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Last Name</label>
                                <input name="lname" type="text" placeholder="Week" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600">Phone number</label>
                                <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>



                            <div>
                                <label class="block mb-2 text-sm text-gray-600">Email address</label>
                                <input name="email" type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <input type="hidden" name="role" value="client">


                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Password</label>
                                <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Password</label>
                                <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <button type="submit"
                                    class="flex items-center justify-between w-full px-6 h-12 mt-7 text-sm tracking-wide text-black capitalize transition-colors duration-300 transform bg-orange-500 rounded-lg hover:bg-orange-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span class="text-white font-medium">Sign Up </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <div class="flex justify-center items-center mt-10 gap-3">
                            <div class="w-48 h-[2px] bg-gray-200"></div>
                            <a href=""><div class="text-gray-500 text-sm hover:underline">Or Sign in</div></a>
                            <div class="w-48 h-[2px] bg-gray-200"></div>
                        </div>
                    </div>




                    <div id="filmmakerForm" class="hidden w-full">
                        <form action="" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2 ">
                            @csrf
                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">First Name</label>
                                <input name="fname" type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-300   bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Last Name</label>
                                <input name="lname" type="text" placeholder="Week" class="block w-full px-5 py-3 mt-2 text-gray-300 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600">Phone number</label>
                                <input name="phone" type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>



                            <div>
                                <label class="block mb-2 text-sm text-gray-600">Email address</label>
                                <input name="email" type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                            <input type="hidden" name="role" value="client">


                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Password</label>
                                <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div>
                                <label class="block mb-2 text-sm text-gray-600 ">Password</label>
                                <input name="password" type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-300 bg-orange-50 border border-gray-200 rounded-lg dark:text-gray-800 dark:border-gray-700 focus:border-orange-400 focus:ring-orange-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <button type="submit"
                                    class="flex items-center justify-between w-full px-6 h-12 mt-7 text-sm tracking-wide text-black capitalize transition-colors duration-300 transform bg-orange-500 rounded-lg hover:bg-orange-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                <span class="text-white font-medium">Sign Up </span>

                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <div class="flex justify-center items-center mt-10 gap-3">
                            <div class="w-48 h-[2px] bg-gray-200"></div>
                            <a href=""><div class="text-gray-500 text-sm hover:underline">Or Sign in</div></a>
                            <div class="w-48 h-[2px] bg-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{url('js/register.js')}}"></script>
