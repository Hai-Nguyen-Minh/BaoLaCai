@extends('layout.parent')
    @section('content')
    <h3>Co tat ca {{$count}} bai viet</h3>

    <div class="row content">
    <div class="col-8">
    @foreach($article as $a)
    <div class="row list">
        <div class="col-sm-4">
            <img src="{{asset('/'.$a->img_path)}}">
        </div>
        <div class="col-sm-8">
            <h2><a href="{{url('/post/'.$a->id_news)}}">{{$a->title}}</a></h2>
            <p>{{$a->smallcontent}}</p>
        </div>
    </div>
    @endforeach
    </div>
    <div class="col-4">
        <img src="{{asset('/image/qc1.jpg')}}" alt="">
        <img src="{{asset('/image/qc2.jpg')}}" alt="">
        <img src="{{asset('/image/qc3.jpg')}}" alt="">
        <img src="{{asset('/image/qc4.jpg')}}" alt="">
        <img src="{{asset('/image/qc5.jpg')}}" alt="">
    </div>
    </div>
    <div class="d-flex justify-content-center page">{{ $article->links() }}</div>
@endsection


<link rel="stylesheet" href="{{asset('/css/search.css')}}">