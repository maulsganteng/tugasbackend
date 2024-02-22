@extends('layouts.app')

@section('judul')
Halaman detail genre
@endsection

@section('content')
<div class="container">
    <h1>{{$genre->genre}}</h1>
    <p>{{$genre->tgl}}</p>
    <a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>
</div>

@endsection