@extends('layouts.app')

@section('judul')
Halaman detail film
@endsection

@section('content')
<div class="container">
    <h1>{{$film->judul}}</h1>
    <p>{{$film->rumahproduksi}}</p>
    <p>{{$film->tgl}}</p>
    <a href="/film" class="btn btn-secondary btn-sm">Kembali</a>
</div>

@endsection