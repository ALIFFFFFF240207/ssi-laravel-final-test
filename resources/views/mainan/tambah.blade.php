<h1>Tambah Data Mainan</h1>
<form action="/mainan/store" method="POST">
    @csrf
    <label for="nama">Nama Mainan</label>
    <input type="text" name="nama_mainan" placeholder="nama mainan">
    <br>
    <br>
    <label for="deskripsi">Deskripsi Mainan</label>
    <input type="text" name="deskripsi_mainan" placeholder="deskripsi mainan">
    <br>
    <br>
    <label for="stok">Stok Mainan</label>
    <input name="sisa_stok" type="number">
    <br>
    <br>
    <label for="harga">Harga Mainan</label>
    <input name="harga_mainan" type="number">
    <br>
    <br>
    <button type="submit" name="submit" value="submit">Tambah</button>
    <button type="cancel" name="cancel" value="cancel">Cancel</button>
</form>