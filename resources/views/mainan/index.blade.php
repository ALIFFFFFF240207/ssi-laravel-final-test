@extends('layouts.master')
@section('content')
<div class="container">

    <table class="table table-hover">
        <div class="row justify-content-end">
            <div class="col-3 mt-4  ">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Barang">
                    <span>
                        <button class="btn btn-primary">Cari</button>
                    </span>
                  </div>
            </div>
        </div>

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
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a class="btn btn-info text-white" href="/mainan/{{$m->id}}/edit">Edit</a>
                    <form action="/mainan/{{$m->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" name="submit" value="delete">
                    </form>
                </div>
                
            </td>
    
        </tr>
        @endforeach
    </table>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="floating-container">
  <div class="floating-button">
    <a href="/mainan/tambah">+</a>
  </div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");
@-webkit-keyframes come-in {
0% {
-webkit-transform: translatey(100px);
        transform: translatey(100px);
opacity: 0;
}
30% {
-webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
}
70% {
-webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
}
100% {
-webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
opacity: 1;
}
}
@keyframes come-in {
0% {
-webkit-transform: translatey(100px);
        transform: translatey(100px);
opacity: 0;
}
30% {
-webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
}
70% {
-webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
}
100% {
-webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
opacity: 1;
}
}
* {
margin: 0;
padding: 0;
}

html, body {
background: #eaedf2;
font-family: 'Roboto', sans-serif;
}

.floating-container {
position: fixed;
width: 100px;
height: 100px;
bottom: 0;
right: 0;
margin: 35px 25px;
}
.floating-container:hover {
height: 300px;
}
.floating-container:hover .floating-button {
box-shadow: 0 10px 25px rgba(44, 179, 240, 0.6);
-webkit-transform: translatey(5px);
      transform: translatey(5px);
-webkit-transition: all 0.3s;
transition: all 0.3s;
}
.floating-container:hover .element-container .float-element:nth-child(1) {
-webkit-animation: come-in 0.4s forwards 0.2s;
      animation: come-in 0.4s forwards 0.2s;
}
.floating-container:hover .element-container .float-element:nth-child(2) {
-webkit-animation: come-in 0.4s forwards 0.4s;
      animation: come-in 0.4s forwards 0.4s;
}
.floating-container:hover .element-container .float-element:nth-child(3) {
-webkit-animation: come-in 0.4s forwards 0.6s;
      animation: come-in 0.4s forwards 0.6s;
}
.floating-container .floating-button {
position: absolute;
width: 65px;
height: 65px;
background: #2cb3f0;
bottom: 0;
border-radius: 50%;
left: 0;
right: 0;
margin: auto;
color: white;
line-height: 65px;
text-align: center;
font-size: 23px;
z-index: 100;
box-shadow: 0 10px 25px -5px rgba(44, 179, 240, 0.6);
cursor: pointer;
-webkit-transition: all 0.3s;
transition: all 0.3s;
}
.floating-container .float-element {
position: relative;
display: block;
border-radius: 50%;
width: 50px;
height: 50px;
margin: 15px auto;
color: white;
font-weight: 500;
text-align: center;
line-height: 50px;
z-index: 0;
opacity: 0;
-webkit-transform: translateY(100px);
      transform: translateY(100px);
}
.floating-container .float-element .material-icons {
vertical-align: middle;
font-size: 16px;
}
.floating-container .float-element:nth-child(1) {
background: #42A5F5;
box-shadow: 0 20px 20px -10px rgba(66, 165, 245, 0.5);
}
.floating-container .float-element:nth-child(2) {
background: #4CAF50;
box-shadow: 0 20px 20px -10px rgba(76, 175, 80, 0.5);
}
.floating-container .float-element:nth-child(3) {
background: #FF9800;
box-shadow: 0 20px 20px -10px rgba(255, 152, 0, 0.5);
}









</style>
</div>
@endsection