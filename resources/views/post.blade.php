@extends('layout.parent')
@section('content')
<form method="POST" action="{{url('/post')}}">
@csrf
        <figure>
                <figcaption>
                @if(isset($error))
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endif
                @if(isset($exist))
                <div class="alert alert-danger" role="alert">{{ $exist }}</div>
                @endif
                </figcaption>
        </figure>
<div class="d-flex flex-column bd-highlight mb-3">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image Path</label>
        <input type="text" class="form-control" name="img_pth">
        </div>
        <div class="mb-3">
                <select class="form-control form-select" name="category">
                        <option selected>Category</option>
                        @foreach($cate as $c)
                        <option value="{{$c->id_category}}">{{$c->category}}</option>
                        @endforeach
                </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
        <textarea class="form-control" name="subject" rows="3"></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
        <textarea class="form-control" name="content" rows="15"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-primary" type="submit">Submit</button>
        </div>
</div>
</form>
@endsection