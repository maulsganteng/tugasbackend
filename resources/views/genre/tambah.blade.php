@extends('layouts.app')
@section('genre')
Halaman tambah film
@endsection
@section('content')
<div class="container">
    <form action="/genre" method="post">
        @csrf
        <div class="mb-3">
            <label>Genre Film</label>
            <input type="text" name="genre" class="form-control">
        </div>
        @error('genre')
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
        <a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
</div>
@endsection