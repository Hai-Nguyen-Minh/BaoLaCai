@extends('layout.parent')
@section('content')
<h3>Co tat ca {{$count}} bai viet</h3>
<div class="row g-2">
@foreach($article as $a)
        <div class="col-3 g-4 bd-highlight">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="d-flex justify-content-center"><img src="{{asset('/'.$a->img_path)}}"></div>
            <h2><a href="{{url('/article/'.$a->id_news)}}">{{$a->title}}</a></h2>
            <p>{{$a->smallcontent}}</p>
        </div>
        </div>
@endforeach
@endsection