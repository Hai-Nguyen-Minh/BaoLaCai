@extends('layout.parent')
@section('content')
<form method="PUT" action="{{url('/post')}}">
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
        <input type="text" class="form-control" name="title" value="{{$article->title}}">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image Path</label>
        <input type="text" class="form-control" name="img_pth" value="{{$article->img_path}}">
        </div>
        <div class="mb-3">
                <select class="form-control form-select" id="category">
                    <option selected value="{{$article->id_category}}"><?php echo $cateSelect?></option>
                        @foreach ($cate as $c)
                        <option value="{{$c->id_category}}">{{$c->category}}</option>
                        @endforeach
                </select>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Subject</label>
        <textarea class="form-control" name="subject" rows="3" value="{{$article->smallconten}}"></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
        <textarea class="form-control" name="content" rows="15" value="{{$article->fullcontent}}"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-outline-primary" type="submit">Submit</button>
        </div>
</div>
</form>
@endsection

<?php 
        use App\Models\Categories;
        $cate = Categories::all();
        $cateSelect = Categories::find($article->id_category)->get('category');
?>