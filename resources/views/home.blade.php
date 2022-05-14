@extends('layout.parent')
@section('content')
<h1>Tin tuc moi cap nhat</h1>

@foreach($post as $p)
    <div class="row content">
        <div class="col-sm-3">
            <img src="{{asset('/'.$p->img_path)}}">
        </div>
        <div class="col-sm-5">
            <h2><a href="{{url('/article/'.$p->id_news)}}">{{$p->title}}</a></h2>
            <p>{{$p->smallcontent}}</p>
        </div>
    </div>
@endforeach
   <div class="d-flex justify-content-center page">{{ $post->links() }}</div>
@endsection

<link rel="stylesheet" href="{{asset('/css/home.css')}}" type="text/css">