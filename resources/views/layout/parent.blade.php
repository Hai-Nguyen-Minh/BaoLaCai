
<!DOCTYPE html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="{{asset('/image/favicon_io/favicon-16x16.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <script>
            $(document).ready(function (){
                    $.ajax({
                        url: "/cate",
                        type: 'get',
                        success:function(result){
                            console.log(result)
                            $.each(result.cate, function(data, value){
                                var link = 'http://localhost:8000/category/'+value.id_category;
                                $('.menu').append($("<li></li>").append($('<a></a>').attr('href', link).addClass('dropdown-item').html(value.category)));
                            })
                        }
                    })
                })    
        </script>
    </head>
    <body>
        <div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('/image/logo.png')}}" height="40px" width="200px"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Trang chủ</a>
                            </li>
                            @if (Session::has('login')&&Session::get('login')==true)
                            <li class="nav-item">
                            <a class="nav-link"  href="{{url('/post/create')}}">Đăng bài</a>
                            @else
                            <li class="nav-item">
                            <a class="nav-link disabled">Đăng bài</a>
                            @endif
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle select" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Thể loại
                            </a>
                            
                            <ul class="dropdown-menu menu" aria-labelledby="navbarDropdown">

                            </ul>
                            </li>
                            @if (Session::has('login')&&Session::get('login')==true)
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Session::get('username')}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{url('/logout')}}">Đăng xuất</a></li>
                            </ul>
                            </li>
                            @else
                            <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{url('register')}}">Đăng ký</a>
                            </li>
                            @endif
                        </ul>
                        <form class="d-flex justify-content-center" method="POST" action="{{url('/search')}}">
                            @csrf
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                            <button class="btn btn-outline-primary" type="submit">Tìm</button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container site">
                @section('content')
                @show
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer">
                <div class="col-3">
                    <h3>SEOGram</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero amet, repellendus eius blanditiis in iusto eligendi iure</p>
                </div>

                <div class="col-3">
                    <h5>Company</h5>
                    <ul>
                        <li>About Us</li>
                        <li>Career</li>
                        <li>Advertise</li>
                        <li>Terms of Service </li>
                        <li>Help & Support</li>
                    </ul>
                </div>
            
                <div class="col-3">
                    <h5>Contact Us</h5>
                    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                    <p>+00 1122 3344 5566</p>
                    <p>seogram@temporary.com</p>
                </div>

                <div class="col-3">
                    <h5>Newsletter</h5>
                    <p>Get updates, news or events on your mail.</p>
                    <form class="subcribe">
                        <input type="email" name="" class="form-control" placeholder="Enter your email">
                        <a href="#"><button class="btn btn-outline-primary">Subscribe</button></a>
                    </form>
                </div>
                <div>
                    <p class="dc">Copyright © 2020. This template design and develop by <span>MACode ID</span></p>
                </div>
            </div>
        </div>   
    </body>
</html>

