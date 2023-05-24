@extends('template.master')
@extends('template.nav')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card align-items-center" style="width: 50vw;">
                <img src='{{$bookdata->book_image}}' class="card-img-top" style="width: 20rem;">
                <div class="card-body" style="width: 50vw;">
                    <h5 class="card-title fw-bold">title : {{$bookdata->book_title}}</h5>
                    <p class="card-text p-0 m-0">author : {{$bookdata->book_author}}</p>
                    <p class="card-text p-0 m-0">publisher : {{$pubdata->publisher_name}}</p>
                    <p class="card-text p-0 m-0">year : {{$bookdata->book_year}}</p>
                    <p class="card-text">synopsis : <br>{{$bookdata->book_synopsis}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection