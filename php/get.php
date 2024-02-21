<form action="" method="get">

    nama :
    <input type="text" name="nama" placeholder="Masukkan Nama">
    alamat :
    <input type="text" name="alamat" placeholder="Masukkan Alamat">

    <input type="submit" name="kirim" value="simpan">
</form>

<?php 

    if(isset($_GET['kirim'])){
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];

        echo $nama;
        echo '<br>';
        echo $alamat;
    }

?>