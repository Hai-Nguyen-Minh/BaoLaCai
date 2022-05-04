@extends('layout.parent')
@section('content')
    <div class="position-absolute top-50 start-50 translate-middle">
    <figure class="text-center">
                    <blockquote class="blockquote">
                        <h2>Register</h2>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                    @if(isset($fail1))
                    <div class="alert alert-danger" role="alert">{{ $fail1 }}</div>
                    @endif
                    @if(isset($fail2))
                    <div class="alert alert-danger" role="alert">{{ $fail2 }}</div>
                    @endif
                </figure>
        <form method="POST" action="{{url('/register')}}">
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
                <button class="btn btn-outline-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection
