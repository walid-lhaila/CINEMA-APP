

    $(document).ready(function () {

        function fetchCategories() {
            $('#category-container').empty();
        $.ajax({
            url: '/getAllCategories',
            type: 'GET',
            success: function(response) {
                // Handle successful response
                response.forEach(function(category) {
                    var categoryHTML = `
                        <div class="w-[32%] h-[150px] bg-gradient-to-t from-zinc-900">
                            <div class="p-5 flex justify-between items-center">
                                <div>
                                    <h1 class="text-gray-300 text-md">${category.created_at}</h1>
                                    <h1 class="text-3xl font-medium font-serif text-white py-2">${category.name}</h1>
                                    <div class="flex gap-2 justify-center  items-center text-center mt-3">
                                        <svg class="w-8 h-8 text-blue-300  cursor-pointer hover:text-blue-500 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m11.5 11.5 2.071 1.994M4 10h5m11 0h-1.5M12 7V4M7 7V4m10 3V4m-7 13H8v-2l5.227-5.292a1.46 1.46 0 0 1 2.065 2.065L10 17Zm-5 3h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                                        </svg>

                                        <svg class="deleteCategory w-8 h-8 text-red-400 cursor-pointer hover:text-red-600 duration-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" data-category-id="${category.id}">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class=" bg-orange-500  rounded-full px-2 py-2">
                                    <svg class="updateCategory w-10 h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18.045 3.007 12.31 3a1.965 1.965 0 0 0-1.4.585l-7.33 7.394a2 2 0 0 0 0 2.805l6.573 6.631a1.957 1.957 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 21 11.479v-5.5a2.972 2.972 0 0 0-2.955-2.972Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>`;
                    $('#category-container').append(categoryHTML);
                });
            },
            error: function(xhr) {
                // Handle error
                console.log(xhr.responseText);
            }
        });
    }
        fetchCategories();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#categoryForm').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $("meta[name='base-url']").attr("content") + "/categoryStore",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#form').removeClass('scale-100').addClass('scale-0');
                    $('#categoryForm')[0].reset();
                    fetchCategories();
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
        $(document).on('click', '.deleteCategory', function() {
            var categoryId = $(this).data('category-id');
            var categoryDiv = $(this).closest('div.bg-gradient-to-t.from-zinc-900');


            $.ajax({
                url: '/categories/' + categoryId,
                type: 'DELETE',
                success: function(response) {
                    console.log(response.message);
                        categoryDiv.remove();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

