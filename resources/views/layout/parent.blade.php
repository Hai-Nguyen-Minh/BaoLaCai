<!DOCTYPE html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">
                    <h1><a class="navbar-brand" href="{{url('/')}}">baolacai.xyz</a></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        @if (Session::has('login')&&Session::get('login')==true)
                        <li class="nav-item">
                        <a class="nav-link"  href="{{url('/post/create')}}">Post</a>
                        @else
                        <li class="nav-item">
                        <a class="nav-link disabled">Post</a>
                        @endif
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @php
                            use App\Models\Categories;
                            $cate = Categories::all();
                        @endphp
                        @foreach($cate as $c)
                        <li><a class="dropdown-item" href="{{url('/category/'.$c->id_category)}}">{{$c->category}}</a></li>
                        @endforeach
                        </ul>
                        </li>
                        @if (Session::has('login')&&Session::get('login')==true)
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Session::get('username')}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/logout')}}">Log Out</a></li>
                        </ul>
                        </li>
                        @else
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}">Log In</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                        </li>
                        @endif
                    </ul>
                    <form class="d-flex" method="POST" action="{{url('/search')}}">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
            <div class="container">
                @section('content')
                @show
            <div>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            </div>
        </div>    
    </body>
</html>

