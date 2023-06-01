
@extends('layout')
@section('content')
<div class="row my-2 mx-2">
<div class="card mb-3 w -100 ">
    <img src="{{asset('images/backg.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $blog->title}}</h5>
      <h6 class="card-subtitle">{{ $blog->author}}</h6>
      <p class="card-text">{{ $blog->description}}</p><br><br>
      <p class="card-text">{{ $blog->content}}</p>
      <p class="card-text"><small class="text-muted">{{ $blog->created_at}}</small></p>
    </div>
    <div>
@endsection
