@extends('layout.parent')
@section('content')

@foreach($news as $n)
<div class="article">
    <div class="d-flex justify-content-end">
    <div class="row g-2">
    <div class="col-12">
      <div class="p-3">
      @if (Session::has('login')&&Session::get('login')==true)
        <a href="{{url('/post/'.$n->id_news.'/edit')}}" class="disabled" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg>
        </a>
          <a href="#" onclick="deleteNews('{{$n->id_news}}')" class="disabled">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
          </a>
      @endif
      </div>
    </div>
    </div>

    </div>
    <div class="d-flex justify-content-center"><h1>{{$n->title}}</h1></div>
    <hr>
    <div class="content">
      <p>{{$n->fullcontent}}</p>
    </div>
</div>
@endforeach
</div>


<script>
  function deleteNews(id)
  {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax(
    {
        url: "/post/"+id,
        type: 'delete', // replaced from put
        dataType: "JSON",
        data: {
            "id_news": id // method and token not needed in data
        },
        success: function (response)
        {
            console.log(response); // see the reponse sent
        },
        error: function() {
         console.log('Failed'); // this line will save you tons of hours while debugging
        // do something here because of error
       }
    });
  }
</script>


@endsection
<link rel="stylesheet" href="{{asset('css/article.css')}}" type="text/css">