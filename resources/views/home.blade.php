@extends('layout.parent')
@section('content')
<h1>Tin tuc moi cap nhat</h1>
<div class="row content">
    <div class="col-8">
        @foreach($post as $p)
            <div class="row list">
                <div class="col-sm-4">
                    <img src="{{asset('/'.$p->img_path)}}">
                </div>
                <div class="col-sm-8">
                    <h2><a href="{{url('/post/'.$p->id_news)}}">{{$p->title}}</a></h2>
                    <p>{{$p->smallcontent}}</p>
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
   <div class="d-flex justify-content-center page">{{ $post->links() }}</div>
@endsection

<link rel="stylesheet" href="{{asset('/css/home.css')}}" type="text/css">