@extends('layouts.main')

@section('title')
<title>Tambah Vaksin</title>
@endsection

@section('navbar')
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="{{route('about')}}">HOME</a>
</li>
<li class="nav-item">
    <a class="nav-link active" href="{{ route('index') }}">VACCINE</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('indexPatient')}}">PATIENT</a>
</li>
@endsection

@section('home')
<div class="text-center fs-3">Input Vaccine</div>
<form action="{{route('uploadVaccine')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="" class="form-text">Vaccine Name</label>
    <input type="text" name="nama_vaksin" id="" class="form-control mb-3">
    <label for="" class="form-text">Price</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Rp</span>
        <input type="text" name="harga" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <label for="" class="form-text">Description</label>
    <textarea name="deskripsi" id="" cols="30" rows="4" class="form-control mb-3"></textarea>
    <label for="" class="form-text">Image</label>
    <div class="mb-3">
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="gambar">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
@endsection