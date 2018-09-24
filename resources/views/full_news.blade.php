@extends('layouts.app')

@section('content')
	<!-- Card -->


<div class="card card-cascade wider reverse">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="{{asset('images')}}/{{$news->img}}" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong></strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">{{$news->title}}</h6>
    <!-- Text -->
    <p class="card-text">
      {{$news->text}}
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

  </div>

</div>
<!-- Card -->
Action button & footer 
@endsection