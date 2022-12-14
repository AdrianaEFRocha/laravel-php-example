@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/'.$viewData['alunos']['image']) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["alunos"]["name"] }} 
        </h5>
        <p class="card-text">{{ $viewData["alunos"]["description"] }}</p>
        <p class="card-text"><small class="text-muted">Idade: {{ $viewData["alunos"]["idade"] }} </small></p>
      </div>
    </div>
  </div>
</div>
@endsection
