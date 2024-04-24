$(document).ready(function() {
    function fetchUsers() {
        $('#user-container').empty();
        $.ajax({
            url: '/getAllUsers',
            type: 'GET',
            success: function(response) {
                response.forEach(function(user) {
                    var userHTML = `
                     <tr class="bg-zinc-900">
                        <td>${user.id}</td>
                        <td class="flex justify-center gap-3  items-center">
                            <svg class="w-9 h-9 text-orange-500 bg-white px-1 py-1 rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            ${user.firstName} ${user.lastName}
                        </td>
                        <td>${user.phone}</td>
                        <td>${user.email}</td>
                        <td>${new Date(user.created_at).toLocaleDateString('en-US')}</td>
                        <td class="flex justify-center gap-2 text-center items-center py-5">
                            <img class="w-8 h-8 rounded-md bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" src="/img/baned.svg" alt="">
                            <svg class="w-8 h-8 rounded-md text-red-500 bg-pink-200 cursor-pointer hover:bg-pink-300 duration-500 py-1 px-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                            </svg>
                        </td>
                    </tr>
                    `;
                    $('#user-container').append(userHTML);
                });
            },
            error: function(xhr) {
                // Handle error
                console.log(xhr.responseText);
            }
        });
    }
    fetchUsers();
})
