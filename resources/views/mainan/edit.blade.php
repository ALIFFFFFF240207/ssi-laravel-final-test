<h1>Edit Data Mainan</h1>
<form action="/mainan/{{$mainan->id}}" method="POST">
    @method('put')
    @csrf
    <label for="nama">Nama Mainan</label>
    <input type="text" name="nama_mainan" value="{{$mainan->nama_mainan}}">
    <br>
    <br>
    <label for="deskripsi">Deskripsi Mainan</label>
    <input type="text" name="deskripsi_mainan" value="{{$mainan->deskripsi_mainan}}">
    <br>
    <br>
    <label for="stok">Stok Mainan</label>
    <input name="sisa_stok" type="number" value="{{$mainan->sisa_stok}}">
    <br>
    <br>
    <label for="harga">Harga Mainan</label>
    <input name="harga_mainan" type="number" value="{{$mainan->harga_mainan}}">
    <br>
    <br>
    <button type="submit" name="submit" value="submit">Ubah</button>
    <button type="cancel" name="cancel" value="cancel">Cancel</button>
</form>