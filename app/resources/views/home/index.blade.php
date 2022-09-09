@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<nav class="navbar">
  <span class="navbar-brand mb-0 h1"></span>
</nav>

<div class="container">
<div class="row">
  <div id="carouselExampleControls" class="carousel slide w-75" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('/img/home/animais.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/img/home/animais2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('/img/home/animais3.jpeg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" data-slide="prev">
	        <span class="carousel-control-prev-icon"></span>
	      </a>
	      <a class="carousel-control-next" href="#carouselExampleControls" data-slide="next">
	        <span class="carousel-control-next-icon"></span>
	      </a>
        
  </div>
</div>

@endsection