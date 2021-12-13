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
@if(count($ients) != 0)
<a href="{{route('pickVaccine')}}">
    <button class="btn btn-primary d-block mt-2">Add Patient</button>
</a>
<table class="table table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vaccine</th>
            <th scope="col">Nama</th>
            <th scope="col">NIK</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Hp</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($patients as $p)
        <tr>
            <th scope="row"><?= $no ?></th>
            <td>{{ $p->vaccine->name}}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->nik }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->no_hp }}</td>
            <td>
                <a href="{{route('updatePatient', ['id' => $p->id])}}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                <a href="{{route('deletePatient', ['id' => $p->id])}}">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        <?php $no++; ?>
        @endforeach
    </tbody>
</table>
@else
<div class="text-center text-secondary mt-5">There is no data</div>
<a href="{{route('pickVaccine')}}">
    <button class="btn btn-primary mx-auto d-block mt-2">Add Patient</button>
</a>
@endif
@endsection