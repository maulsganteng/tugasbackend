@extends('layouts.app')
@section('judul')
Halaman tambah genre
@endsection
@section('content')
<div class="container">
    <form action="/genre/{{$genre->id}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label>Judul genre</label>
            <input type="text" name="genre" class="form-control" value="{{$genre->genre}}">
        </div>
        @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Tanggal Rilis</label>
            <input type="date" name="tgl" class="form-control" value="{{$genre->tgl}}">
        </div>
        @error('tgl')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/genre" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection