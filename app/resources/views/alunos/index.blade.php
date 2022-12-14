@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["alunos"] as $alunos)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/img/'.$alunos['image']) }}" class="card-img-top img-card" width="120px" height="150px">
      <div class="card-body text-center">
        <a href="{{ route('alunos.show', ['id'=> $alunos['id']]) }}"
          class="btn bg-primary text-white">{{ $alunos["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
