@extends('layouts.main')

@section('title')
<title>Patient</title>
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
<div class="text-center fs-3">Register {{ $vaccine->name }} Patient</div>
<form action="{{ route('uploadPatient') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-text">Vaccine id</label>
    <input type="text" name="id_vaksin" value="{{ $vaccine->id }}" id="" class="form-control mb-3" readonly="true">
    <label for="" class="form-text">Patient Name</label>
    <input type="text" name="nama_patient" id="" class="form-control mb-3">
    <label for="" class="form-text">NIK</label>
    <input type="text" name="nik" class="form-control mb-3">
    <label for="" class="form-text">Alamat</label>
    <input type="text" name="alamat" class="form-control mb-3">
    <label for="" class="form-text">KTP</label>
    <input class="form-control form-control-sm mb-3" id="formFileSm" type="file" name="gambar">
    <label for="" class="form-text">No Hp</label>
    <input type="text" name="no_hp" class="form-control mb-3">
    <input type="submit" value="Register" class="btn btn-primary">
</form>
@endsection