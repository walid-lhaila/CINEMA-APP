@extends('header');
<div class="flex justify-between h-[70px] w-full z-10 items-center bg-black px-10">
    <div class="z-10">
        <img class="w-[145px] h-[100px]" src="{{url('img/Nlogo.png')}}" alt="">
    </div>

    <div class="z-10">
        <svg class="w-9 h-9 text-white cursor-pointer hover:text-orange-400 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
    </div>
</div>

<div>
    <form action="" method="post" class="p-4 md:p-5">
        @csrf
        <div class="grid gap-4 mb-4 grid-cols-2">
            <div class="col-span-2">
                <label for="name" class="block mb-2 text-sm font-medium text-black">Name</label>
                <input type="text" name="name" id="name" class=" border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-2.5  dark:placeholder-gray-400 " placeholder="Type Cinema name" required="">
            </div>
            <div class="col-span-2">
                <label for="address" class="block mb-2 text-sm font-medium text-black">Address</label>
                <input type="text" name="address" id="address" class=" border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-2.5  dark:placeholder-gray-400 " placeholder="Adress" required="">
            </div>
        </div>
        <button type="submit" class="text-white  inline-flex items-center bg-orange-500 hover:bg-orange-600  duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center ">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Add new Cinema
        </button>
    </form>
</div>
