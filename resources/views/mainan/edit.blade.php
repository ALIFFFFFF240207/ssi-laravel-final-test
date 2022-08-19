@extends('layouts.master')
@section('title', "My page title")
@section('content')
<div class="container">
    <h1 class="text-center mb-3">Edit Data Mainan</h1>
    <form action="/mainan/{{$mainan->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label" for="nama">Nama Mainan</label>
            <input class="form-control" type="text" name="nama_mainan" value="{{$mainan->nama_mainan}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="deskripsi">Deskripsi Mainan</label>
            <textarea class="form-control" name="deskripsi_mainan" value="{{$mainan->deskripsi_mainan}}">{{$mainan->deskripsi_mainan}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="stok">Stok Mainan</label>
            <input class="form-control" name="sisa_stok" type="number" value="{{$mainan->sisa_stok}}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="harga">Harga Mainan</label>
            <input class="form-control" name="harga_mainan" type="number" value="{{$mainan->harga_mainan}}">
        </div>

        <button class="btn btn-success" type="submit" name="submit" value="submit">Ubah</button>
       <a href="/mainan" class="btn btn-danger">Batal</a>
    </form>
</div>
@endsection
