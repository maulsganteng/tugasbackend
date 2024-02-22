@extends('layouts.app')
@section('judul')
Halaman tambah film
@endsection
@section('content')
<div class="container">
    <form action="/film/{{$film->id}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control" value="{{$film->judul}}">
        </div>
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Rumah Produksi</label>
            <input type="text" name="rumahproduksi" class="form-control" value="{{$film->rumahproduksi}}">
        </div>
        @error('rumahproduksi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tanggal Rilis</label>
            <input type="date" name="tgl" class="form-control" value="{{$film->tgl}}">
        </div>
        @error('tgl')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/genre" class="btn btn-secondary">Kembali</a>

    </form>
</div>
@endsection