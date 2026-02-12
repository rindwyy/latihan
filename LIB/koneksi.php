<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "pembelajaraninr10";


try{
    $con = mysqli_connect($localhost, $username, $password, $database);
    //mysqli_connect itu buat koneksi ke database
    echo "WELCOMEE IINNN <br> <br>";
}catch (\Throwable $th){ //Jadi bosa terlempar di variabel th
    echo "Koneksi Gagal : " . $th->getMessage();
}
 

?>