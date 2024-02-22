@extends('layouts.app')
@section('judul')
Halaman tambah film
@endsection
@section('content')
<div class="container">
    <form action="/film" method="post">
        @csrf
        <div class="mb-3">
            <label>Judul Film</label>
            <input type="text" name="judul" class="form-control">
        </div>
        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Rumah Produksi</label>
            <input type="text" name="rumahproduksi" class="form-control">
        </div>
        @error('rumahproduksi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tanggal Rilis</label>
            <input type="date" name="tgl" class="form-control">
        </div>
        @error('tgl')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/genre" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection