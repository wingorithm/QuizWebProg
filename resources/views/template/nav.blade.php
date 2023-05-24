@section('navbar')
<nav class="navbar navbar-expand-lg bg-body-tertiary flex-column" style="background-color:cornflowerblue">
    <div class="container justify-content-center">
        <h1 class="fw-bold">Giant Book Supplier</h1>
    </div>
    <div class="container justify-content-center">
        <div class="navbar-nav">
            <a class="nav-link fw-bold active" aria-current="page" href="{{route('home')}}">Home</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">category</a>
                <ul class="dropdown-menu">
                @foreach($catdata as $cd)
                    <li><a class="dropdown-item" href="{{route('category', ['catid' => $cd->id])}}">{{$cd -> category_name}}</a></li>
                @endforeach
                </ul>
            </li>
            <a class="nav-link fw-bold" href="{{route('publisher')}}">publisher</a>
            <a class="nav-link fw-bold" href="{{route('contact')}}">Contact</a>
        </div>
        </div> 
    </div>
</nav>
@endsection