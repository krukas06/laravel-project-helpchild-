@extends('layouts.app')

@section('content')
	

@foreach($events as $event)	
<div class="card-group" style="width: 1000px;">
  <div class="card">
    <img class="card-img-top" src="{{asset('images')}}/{{$event->img}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$event->title}}</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="{{route('news.show',['title'=>$event->title])}}"><button type="button" class="btn btn-success" >Подробный просмотр</button></a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  @endforeach

@endsection