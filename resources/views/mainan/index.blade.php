<table border="1">
    <tr>
        <th>id</th>
        <th>nama mainan</th>
        <th>deskripsi mainan</th>
        <th>stok sisa</th>
        <th>harga mainan</th>
    </tr>
    @foreach($mainan as $m)
    <tr>
        <td>{{$m->id}}</td>
        <td>{{$m->nama_mainan}}</td>
        <td>{{$m->deskripsi_mainan}}</td>
        <td>{{$m->sisa_stok}}</td>
        <td>{{$m->harga_mainan}}</td>
    </tr>
    @endforeach
</table>