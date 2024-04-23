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
                <h1 class="text-white text-center font-bold font-serif mt-1">Lhaila Walid</h1>
            </div>
        <a href="login"><buton class="font-bold text-white bg-orange-500 font-mono px-4 py-1 hover:bg-orange-500 rounded-b-lg hover:rounded-t-lg hover:rounded-b cursor-pointer duration-500">LOG OUT</buton></a>
    </div>
</div>

<div class="w-[50%] mx-auto mt-28">
    <div class="flex justify-center items-center text-center py-5">
        <h1 class="text-black font-bold font-serif text-3xl">Add New Movie</h1>
    </div>
    <form action="{{ route('movies.create') }}" method="post" enctype="multipart/form-data" class="p-4 md:p-5">
        @csrf
        <div class="grid gap-4 mb-4 grid-cols-4">
            <div class="col-span-2">
                <label for="title" class="block mb-2 text-sm font-medium text-black">Title</label>
                <input type="text" name="title" id="title" class=" border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-3  dark:placeholder-gray-500 " placeholder="Type Cinema name" >
            </div>
            <div class="col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-black">Description</label>
                <input type="text" name="description" id="description" class=" border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-3  dark:placeholder-gray-500 " placeholder="Adress" >
            </div>
            <div class="col-span-2">
                <label for="image" class="block mb-2 text-sm font-medium text-black">Image</label>
                <input type="file" name="image" id="image" class=" border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-3  dark:placeholder-gray-500 ">
            </div>
            <div class="col-span-2">
                <label for="trailer" class="block mb-2 text-sm font-medium text-black">Trailer</label>
                <input type="file" name="trailer" id="trailer" class=" border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-3  dark:placeholder-gray-500 " placeholder="Enter Trailer URL" >
            </div>
            <div class="col-span-4">
                <label for="date" class="block mb-2 text-sm font-medium text-black">Date</label>
                <input type="date" name="date" id="date" class=" border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-400 block w-full p-3  dark:placeholder-gray-500 " placeholder="date" >
            </div>
            <div class="col-span-2">
                <label for="cinema_id" class="block mb-2 text-sm font-medium text-black">Cinema</label>
                <select name="cinema_id" id="cinema_id" class="border border-gray-400  text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-3 bg-white" >
                    <!-- You can add options dynamically here -->
                    <option value="" disabled selected>Select Cinema</option>
                        @foreach($cinemas as $cinema)
                            <option value="{{$cinema->id}}">{{$cinema->name}}</option>
                        @endforeach
                </select>
            </div>
            <div class="col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-black">Room</label>
                <select name="room_id" id="room_id" class="border border-gray-400  text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-3 bg-white" >
                    <option value="" disabled selected>Select Room</option>

                </select>
            </div>
            <div class="col-span-4">
                <label for="date" class="block mb-2 text-sm font-medium text-black">Category</label>
                <select name="category_id" id="category_id" class="border border-gray-400  text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full p-3 bg-white" >
                    <!-- You can add options dynamically here -->
                    <option value="" disabled selected>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <button type="submit" class="text-white  inline-flex items-center bg-orange-500 hover:bg-orange-600  duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-3 text-center ">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Add new Movie
        </button>
    </form>
</div>
<script>
    document.getElementById('cinema_id').addEventListener('change', function() {
        var cinemaId = this.value;
        var roomSelect = document.getElementById('room_id');

        // Clear existing options
        roomSelect.innerHTML = '';

        fetch(`/get-rooms?cinema_id=${cinemaId}`)
            .then(response => response.json())
            .then(data => {
                if (data.length === 0) {
                    var option = document.createElement('option');
                    option.value = '';
                    option.textContent = 'Sorry, this cinema does not have any rooms.';
                    option.disabled = true;
                    roomSelect.appendChild(option);
                } else {
                    data.forEach(room => {
                        var option = document.createElement('option');
                        option.value = room.id;
                        option.textContent = room.name;
                        roomSelect.appendChild(option);
                    });
                }
            });
    });
</script>
