$(document).ready(function () {

    function getAllCinemas() {
        $('#cinema-container').empty();
        $.ajax({
            url:'getAllCinemas',
            type: 'GET',
            success: function(response) {
                response.forEach(function(cinema){
                    var cinemaHTML = `
                          <div class="max-w-sm  rounded-lg shadow bg-gradient-to-t from-zinc-900 ">
                            <a href="#">
                                <img class="rounded-t-lg" src="/img/cinemas.jpg" alt="" />
                            </a>
                            <div class="flex justify-between items-center text-center">
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-3xl font-bold tracking-tight text-white">${cinema.name}</h5>
                                    </a>
                                    <div class="flex gap-2 mt-3">
                                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                        </svg>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">${cinema.address}</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 items-center text-center px-3">
                                    <svg class="updateCinema w-8 h-8  hover:text-blue-500 cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                                    </svg>

                                    <svg class="deleteCinema w-8 h-8  cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" data-cinema-id="${cinema.id}">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                    </svg>
                                </div>
                            </div>`;
                    $('#cinema-container').append(cinemaHTML);
                });
            },
            error: function(xhr) {
                // Handle error
                console.log(xhr.responseText);
            }
        });
    }
    getAllCinemas();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#cinemaForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: $("meta[name='base-url']").attr("content") + "/cinemaStore",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#form').removeClass('scale-100').addClass('scale-0');
                $('#cinemaForm')[0].reset();
                getAllCinemas();
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });

    $(document).on('click', '.deleteCinema', function() {
        var cinemaId = $(this).data('cinema-id');
        var cinemaDiv = $(this).closest('div.bg-gradient-to-t.from-zinc-900');

        $.ajax({
            url: '/cinemas/' + cinemaId,
            type: 'DELETE',
            success: function(response) {
                console.log(response.message);
                cinemaDiv.remove();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
