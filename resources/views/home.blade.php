@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambahkan film</div>
                <div class="card-body  align-self-center text-center">
                    <p>tambah film</p>
                    <a href="/film/create" class="btn btn-primary btn-m">tambah</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Tambahkan genre</div>
                <div class="card-body align-self-center text-center">
                    <p>tambah genre</p>
                    <a href="/genre/create" class="btn btn-primary btn-m">tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection