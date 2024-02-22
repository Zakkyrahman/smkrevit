<?php
    require_once "../function.php";

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    echo $sql;

    header('location:http://localhost/smkrevit/php/restoran/kategori/select.php');

?>