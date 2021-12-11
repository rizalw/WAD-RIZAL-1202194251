@extends('layouts.main')

@section('title')
<title>Vaksin</title>
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
@if(count($vaccine) != 0)
<a href="{{route('insertVaccine')}}">
    <button class="btn btn-primary d-block mt-2">Add Vaccine</button>
</a>
<table class="table table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($vaccine as $v)
        <tr>
            <th scope="row"><?= $no ?></th>
            <td>{{ $v->name }}</td>
            <td>Rp {{ $v->price }}</td>
            <td>
                <a href="{{ route('updateVaccine', ['id' => $v->id] ) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>
                <a href="{{ route('deleteVaccine', ['id' => $v->id]) }}">
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
<a href="{{route('insertVaccine')}}">
    <button class="btn btn-primary mx-auto d-block mt-2">Add Vaccine</button>
</a>
@endif
@endsection