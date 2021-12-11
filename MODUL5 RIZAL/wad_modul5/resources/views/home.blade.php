@extends('layouts.main')

@section('title')
<title>Beranda</title>
@endsection

@section('navbar')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('about')}}">HOME</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('index')}}" >VACCINE</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('indexPatient')}}">PATIENT</a>
</li>
@endsection

@section('home')
<div class="fs-1 text-center mt-5">About Us</div>
<div class="row mt-5">
    <div class="col-5">
        <img src="images/vaksin.jpeg" alt="" width="400">
    </div>
    <div class="col-7">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, porro optio quisquam explicabo quod nisi enim et dolores aperiam sed rerum corrupti suscipit eius iusto recusandae atque! Natus nesciunt dolor beatae minus eligendi non itaque perferendis praesentium. Eum incidunt, eaque labore magnam error alias commodi asperiores unde, saepe ratione fugit accusantium aut sequi, repudiandae voluptatum doloremque obcaecati explicabo quibusdam quo. Dicta alias quidem odit nemo illo, omnis possimus quia? Architecto ducimus, excepturi corrupti obcaecati ab repudiandae deleniti unde fugiat asperiores, ipsam quisquam fugit facere, nihil quasi magni. Illo unde eligendi quaerat similique veniam facere repudiandae, natus facilis minima eius deleniti?
    </div>
</div>
@endsection