@extends('layout.parent')
@section('content')
    <div class="log">
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <h2>Log In</h2>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                    @if(isset($error1))
                    <div class="alert alert-danger" role="alert">{{ $error1 }}</div>
                    @endif
                    @if(isset($error2))
                    <div class="alert alert-danger" role="alert">{{ $error2 }}</div>
                    @endif
                    @if(isset($error3))
                    <div class="alert alert-danger" role="alert">{{ $error3 }}</div>
                    @endif
                    </figcaption>
                </figure>
        <form method="POST" action="{{url('/login')}}">
            @csrf
            <div class="row mb-4">
                <label for="inputEmail3" class="col-md-4 col-form-label">Username</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="inputEmail3" name="username">
                </div>
            </div>
            <div class="row mb-4">
                <label for="inputPassword3" class="col-md-4 col-form-label">Password</label>
                <div class="col-sm-12">
                <input type="password" class="form-control" id="inputPassword3" name="pass">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-primary" type="submit">Sign In</button>
            </div>
        </form>
    </div>
@endsection