@extends('header')

<div class="ticket">
    <div class="holes-top"></div>
    <div class="title">
        <p class="cinema">{{$cinema}}</p>
        <p class="movie-title">{{$title}}</p>
    </div>
    <div class="poster">
        <img src="{{$image}}" alt="Movie: Only God Forgives" />
    </div>
    <div class="info">
        <table>
            <tr>
                <th>SEATS</th>
                <th>DATE</th>
                <th>LOCATION</th>
            </tr>
            <tr>
                <td class="bigger">{{$seats}}</td>
                <td class="bigger">{{$date}}</td>
                <td class="bigger">{{$address}}</td>
            </tr>
        </table>

    </div>
</div>
