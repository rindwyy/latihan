<?php
include "./lib/koneksi.php";

$id = $_GET["id"];

$query = mysqli_query($con,"DELETE FROM makanan WHERE id = '$id'");

if ($query){
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href = 'view.php';
    </script>";
} else {
    echo "<br>Data Gagal Dihapus";
}