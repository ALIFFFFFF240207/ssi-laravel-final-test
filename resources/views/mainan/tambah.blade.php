@extends('layouts.master')
@section('title', "Halaman Tambah Barang")
@section('content')

<div class="container">
    <form action="/mainan/store" method="POST">
        <br>
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Mainan</label>
            <input class="form-control" type="text" name="nama_mainan">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Mainan</label>
            <textarea class="form-control" name="deskripsi_mainan" rows="3"></textarea>

        </div>

        <div class="mb-3">
            <label class="form-label" for="stok">Stok Mainan</label>
            <input class="form-control" name="sisa_stok" type="number">
        </div>

        <div class="mb-3">
            <label class="form-label" for="harga">Harga Mainan</label>
            <input class="form-control" name="harga_mainan" type="number">
        </div>

        <button class="btn btn-success" type="submit" name="submit" value="submit">Tambah</button>
        <a href="/mainan" class="btn btn-danger">Batal</a>
    </form>
</div>

@endsection