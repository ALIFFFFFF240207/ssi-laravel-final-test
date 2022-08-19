@extends('layouts.master')
@section('title', "Halaman Master Barang")
@section('content')
<div class="container-fluid">

        <div class="row justify-content-end ">
            <div class="col-3">
                <form method="GET">
                    <div class="input-group my-3">
                        <span class="input-group-text" id="cari"><i class='bx bx-search-alt-2'></i></span>
                        <input type="text" placeholder="cari data mainan" class="form-control" name="cari" value="{{ $cari }}">
                      </div>
                </form>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">

                <tr>
                    <th>id</th>
                    <th>nama mainan</th>
                    <th>deskripsi mainan</th>
                    <th>stok sisa</th>
                    <th>harga mainan</th>
                    <th>Aksi</th>
                </tr>
                @foreach($mainan as $m)
                <tr>
                    
                    <td>{{$m->id}}</td>
                    <td>{{$m->nama_mainan}}</td>
                    <td>{{$m->deskripsi_mainan}}</td>
                    <td>{{$m->sisa_stok}}</td>
                    <td>{{$m->harga_mainan}}</td>
                    <td>
                        <form action="/mainan/{{$m->id}}" method="POST">
                            <a class="btn btn-success text-white" href="/mainan/{{$m->id}}/edit">Edit</a>
                            |
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="delete">
                            </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $mainan->links() !!}
        </div>
    </div>
    
<div class="floating-container">
  <div class="floating-button">
    <a href="/mainan/tambah">+</a>
  </div>
</div> 

@endsection