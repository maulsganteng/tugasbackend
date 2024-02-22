@extends('layouts.app')

@section('judul')
Halaman list film
@endsection

@section('content')
<div class="container">
    <a href="/film/create" class="btn btn-primary btn-sm">tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Rumah Produksi</th>
                <th scope="col">Tanggal Tayang</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($film as $key => $value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->judul}}</td>
                <td>{{$value->rumahproduksi}}</td>
                <td>{{$value->tgl}}</td>
                <td>
                    <form action="/film/{{$value->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/film/{{$value->id}}" class="btn btn-info btn-sm">info</a>
                        <a href="/film/{{$value->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <a href="/home" class=" align-end btn btn-secondary btn-sm">Kembali kehalaman home</a>
</div>

@endsection