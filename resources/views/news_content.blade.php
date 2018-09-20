@extends('layouts.app')

@section('content')
	

@foreach($events as $event)	
<div class="card border-success mb-3" style="max-width: 18rem; margin-left: 50%; width: 400px;">
    <div class="card-header bg-transparent border-success">Header</div>
    <div class="card-body text-success">
        <h5 class="card-title">{{$event->title}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
</div>
@endforeach

@endsection