@extends('layouts.main')

@section('title')
<title>Pick Vaccine</title>
@endsection

@section('navbar')
<li class="nav-item">
    <a class="nav-link" href="{{route('about')}}">HOME</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('index')}}">VACCINE</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="{{route('indexPatient')}}">PATIENT</a>
</li>
@endsection

@section('home')
<div class="d-flex justify-content-around">
    @foreach($vaccine as $v)
    <div class="card" style="width: 18rem;">
        <img src="uploaded/{{ $v->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $v->name }}</h5>
            <h6 class="text-secondary">Rp {{ $v->price }}</h6>
            <p class="card-text">{{ $v->description }}
            <a href="{{route('insertPatient', ['id' => $v->id])}}" class="btn btn-primary w-100 mt-3">Vaccine Now</a>
        </div>
    </div>
    @endforeach
</div>
@endsection