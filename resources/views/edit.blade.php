@extends('layouts.main')

@section('content')
<h1>Edit Data Mahasiswa</h1>
<div class="card">
    <div class="card-body">
        <form action="/editdata/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="name" id="name" value="{{ $data->name }}" placeholder="Nama Lengkap" class="form-control">
        </div>
        <div class="mb-3">  
            <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="number" name="nim" id="nim" value="{{ $data['nim'] }}" placeholder="NIM" class="form-control">
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" name="prodi" id="prodi" value="{{ $data->prodi }}" placeholder="Program Studi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" value="{{ $data->email }}" placeholder="Email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">Nomor HP</label>
            <input type="number" name="nohp" id="nohp" value="{{ $data->nohp }}" placeholder="Nomor Handphone" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">EDIT WOO</button>
        </form>
    </div>
    </div>
@endsection