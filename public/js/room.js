    $(document).ready(function() {

        function fetchRooms() {
            $('#room-container').empty();
            $.ajax({
                url: '/getAllRooms',
                type: 'GET',
                success: function(response) {
                    response.forEach(function(room) {
                        var cinemaName = room.cinema.name;
                        var roomHTML = `
                 <div class="w-[32%] h-[150px] bg-gradient-to-t from-zinc-900">
                    <div class="p-5 flex justify-between items-center">
                        <div>
                            <div class="flex gap-3">
                                <svg class="w-5 h-5 text-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z"/>
                                </svg>
                                <h1 class="text-gray-300 text-md">${cinemaName}</h1>
                            </div>
                            <h1 class="text-3xl font-medium font-serif text-white py-2">${room.name}</h1>
                            <div class="flex gap-2 mt-3">
                                <svg class="deleteRoom w-8 h-8 text-red-500 cursor-pointer hover:text-red-600 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" data-room-id="${room.id}">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class=" bg-orange-500  rounded-full px-2 py-2">
                           <h1>${room.seats}</h1>
                        </div>
                    </div>
                </div>`;
                        $('#room-container').append(roomHTML);
                    });
                },
                error: function(xhr) {
                    // Handle error
                    console.log(xhr.responseText);
                }
            });
        }
        fetchRooms();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#roomForm').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'roomStore',
                data: formData,
                success: function ($data) {
                    $('#form').removeClass('scale-100').addClass('scale-0');
                    $('#roomForm')[0].reset();
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });

        $(document).on('click','.deleteRoom', function(){
            var roomId = $(this).data('room-id');
            var roomDiv = $(this).closest('div.bg-gradient-to-t.from-zinc-900');

            $.ajax({
                url: '/rooms/' + roomId,
                type: 'DELETE',
                success: function(response) {
                    console.log(response.message);
                    roomDiv.remove();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
