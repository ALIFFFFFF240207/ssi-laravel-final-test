<a href="/mainan/tambah">Tambah Data</a>
<table border="1">
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
            <a href="/mainan/{{$m->id}}/edit">Edit</a>
            <form action="" method="POST">
                @scrf
                @method('delete')
                <input type="submit" name="submit" value delete>
            </form>
        </td>

    </tr>
    @endforeach
</table>