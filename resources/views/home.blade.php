@extends('template.master')
@extends('template.nav')

@section('konten')
    <div class="container" style="overflow-x: auto;">
        <div class="row flex-nowrap" style="margin-bottom: 10px;">
        @foreach($bookdata as $bd)
            <div class="col">
                <div class="card" style="width: 16rem;">
                    <img src='{{$bd->book_image}}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$bd->book_title}}</h5>
                        <p class="card-text p-0 m-0">by</p>
                        <p class="card-text">{{$bd->book_author}}</p>
                        <a href="{{route('detail', [$bd->id])}}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
