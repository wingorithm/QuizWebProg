@extends('template.master')
@extends('template.nav')

@section('konten')
<div class="container">
    <div class="row">
        @foreach($pubdata as $pd)
        <div class="col p-0 m-0">
             <div class="card" style="width: 18rem;">
                    <img src='https://images.bisnis.com/posts/2022/11/01/1593880/logo-hari-pers-nasional-2021-panitia-hpn.jpg' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">publisher name: {{$pd->publisher_name}}</h5>
                        <a href="{{route('pubdecs', ['pubid' => $pd->id])}}" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection