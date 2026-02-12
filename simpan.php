<?php

include_once "LIB/koneksi.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $query = mysqli_query($con, "INSERT INTO `makanan`(`nama`, `harga`) VALUES ('$nama','$harga')");
    //mysqli_query itu buat ngejalanin query di php
    if($query){
        echo "Data Berhasil Disimpan";
    } else {
        echo "Data Gagal Disimpan";
    }
}
?>