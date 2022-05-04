@extends('layout.parent')
@section('content')

<h1>Tin tuc moi cap nhat</h1>
<div class="row">
@foreach($post as $p)
    <div class="col-3 g-4 bd-highlight">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
    <div class="d-flex justify-content-center"><img src="{{asset('/'.$p->img_path)}}"></div>
        <h2><a href="{{url('/article/'.$p->id_news)}}">{{$p->title}}</a></h2>
        <p>{{$p->smallcontent}}</p>
    </div>
    </div>
@endforeach
</div>
@endsection