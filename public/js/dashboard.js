$(document).ready(function() {

    function updateUserCount() {
        $.ajax({
            url: '/getUserCount',
            type: 'GET',
            success: function(response) {
                $('#user-count').text(response.userCount);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    updateUserCount();
    setInterval(updateUserCount, 5000);

    function getLatestUsers() {
        $('#latest-users').empty();
        $.ajax({
            url: 'getLatestUsers',
            type: 'GET',
            success: function(response) {
                response.forEach(function(user) {
                    var userHTML = `
                        <tr style="display: none;">
                            <td>${user.id}</td>
                            <td>${user.firstName} ${user.lastName}</td>
                            <td>${user.email}</td>
                            <td class="py-3">${user.phone}</td>
                        </tr>
                    `;
                    $('#latest-users').append(userHTML);
                });
                // Fade in each row with a duration of 500 milliseconds
                $('#latest-users tr').each(function(index) {
                    $(this).fadeIn(500 * index);
                });
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    getLatestUsers();
    setInterval(getLatestUsers, 10000);


    function formatDate(dateString) {
        const date = new Date(dateString);
        const options = { day: 'numeric', month: 'long', year: 'numeric' };
        return date.toLocaleDateString('en-GB', options);
    }

    function getLatestCinemas() {
        $('#latest-cinemas').empty();
        $.ajax({
            url: 'getLatestCinemas',
            type: 'GET',

            success: function (response) {
                response.forEach(function(cinema) {
                    var cinemaHTML = `
                        <tr style="display: none;">
                            <td>${cinema.id}</td>
                            <td>${cinema.name}</td>
                            <td>${cinema.address}</td>
                            <td class="py-3">${formatDate(cinema.created_at)}</td>
                        </tr>
                    `;
                    $('#latest-cinemas').append(cinemaHTML);
                });
                $('#latest-cinemas tr').each(function(index) {
                    $(this).fadeIn(1000 * index);
                });
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    getLatestCinemas();
    setInterval(getLatestCinemas, 10000);
});
