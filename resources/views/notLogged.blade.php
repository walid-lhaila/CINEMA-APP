@extends('header')
<section class="bg-orange-50">
    <div class=" flex items-center min-h-screen px-6 py-12 mx-auto">
        <div class="flex flex-col items-center max-w-sm mx-auto text-center">
            <p class="p-3 text-sm font-medium text-white rounded-full bg-orange-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
            </p>
            <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">You must be logged in to access this page.</h1>

            <div class="flex gap-4 justify-center items-center w-full mt-6 gap-x-3 shrink-0 sm:w-auto">
                <a href="/login"><button class="flex gap-2 items-center justify-center w-1/2 px-5 py-2 text-sm  transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-100 hover:bg-gray-100 dark:text-gray-600 hover:text-white duration-500 dark:border-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span>Sign In</span>
                </button></a>

                <a href="/"><button class="w-1/2 px-5 py-2 text-sm text-white transition-colors duration-200 bg-orange-400 rounded-lg shrink-0 sm:w-auto hover:bg-orange-500 duration-500 ">
                    Take me home
                </button></a>
            </div>
        </div>
    </div>
</section>

</body>
