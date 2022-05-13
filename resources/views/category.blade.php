@extends('layout.parent')
@section('content')
    <h3>Co tat ca {{$count}} bai viet</h3>
    @foreach($article as $a)
    <div class="row content">
        <div class="col-sm-3">
            <img src="{{asset('/'.$a->img_path)}}">
        </div>
        <div class="col-sm-9">
            <h2><a href="{{url('/article/'.$a->id_news)}}">{{$a->title}}</a></h2>
            <p>{{$a->smallcontent}}</p>
        </div>
        <hr>
    </div>
    @endforeach
    <div class="d-flex justify-content-center">{{ $article->links() }}</div>
@endsection


<link rel="stylesheet" href="{{asset('/css/category.css')}}">