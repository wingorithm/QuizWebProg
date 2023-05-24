@extends('template.master')
@extends('template.nav')

@section('konten')
    <div class="container">
        <div class="row" style="background-color: bisque">
            <div class="col">
                <h3>publisher name: {{$pubselect->publisher_name}}</h3>
                <h3>publisher address: {{$pubselect->publisher_address}}</h3>
                <h3>publisher phonenumber: {{$pubselect->publisher_phonenumber}}</h3>
                <h3>publisher email: {{$pubselect->publisher_email}}</h3>
            </div>
        </div>
        <div class="row">
            @if($showdata->isEmpty())
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Empty</h5>
                            <p class="card-text">no book data available.</p>
                        </div>
                    </div>
                </div>
            @else
                @foreach($showdata as $sd)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$sd->book_image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{$sd->book_title}}</h5>
                                <p class="card-text p-0 m-0">by</p>
                                <p class="card-text">{{$sd->book_author}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
