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
    setInterval(updateUserCount, 2000);


    function updateCinemaCount() {
        $.ajax({
            url: '/getCinemaCount',
            type: 'GET',
            success: function(response) {
                    $('#cinema-count').text(response.cinemaCount);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    updateCinemaCount();
    setInterval(updateCinemaCount, 2000);

    function updateCategoryCount() {
        $.ajax({
            url: '/getCategoryCount',
            type: 'GET',
            success: function (response) {
                $('#category-count').text(response.categoryCount);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    updateCategoryCount();
    setInterval(updateCategoryCount, 2000);

    function updateMovieCount(){
        $.ajax({
            url: '/getMovieCount',
            type: 'GET',
            success: function (response) {
                $('#cinema-count').text(response.cinemaCount);
            },
            error: function(xhr) {
                console.log(xhr.responseText)
            }
        });
    }
    updateMovieCount();
    setInterval(updateMovieCount, 2000);

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

     function getLatestCategories(){
        $.ajax({
            url: 'getLatestCategories',
            type: 'GET',
            success: function (response) {
                $('#latest-categories').empty(); // Clear existing categories
                response.forEach(function(category) {
                    var categoryHTML = `
                   <tr style="display: none;">
                         <td>${category.id}</td>
                         <td>${category.name}</td>
                            <td class="py-3">${formatDate(category.created_at)}</td>
                    </tr>
                    `;
                    $('#latest-categories').append(categoryHTML);
                });
                $('#latest-categories tr').each(function(index) {
                    $(this).fadeIn(1000 * index);
                });
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    getLatestCategories();
    setInterval(getLatestCategories, 10000);

    function getLatestMovies() {
        $.ajax({
            url: '/getLatestMovie',
            type: 'GET',
            success: function (response) {
                $('#latest-movies').empty();
                response.forEach(function(movie) {
                    var movieHTML = `
                        <tr style="display: none;">
                         <td>${movie.id}</td>
                         <td>${movie.title}</td>
                          <td>${movie.category.name}</td>
                            <td class="py-3">${formatDate(movie.created_at)}</td>
                    </tr>
                    `;
                    $('#latest-movies').append(movieHTML);
                });
                $('#latest-movies tr').each(function(index) {
                    $(this).fadeIn(1000 * index);
                });
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
    }
    getLatestMovies();
    setInterval(getLatestMovies, 10000);
});
