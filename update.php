<?php
include "./lib/koneksi.php";


$id = $_GET["id"];

$query = mysqli_query($con, "SELECT * FROM makanan WHERE id = '$id'");

if ($query->num_rows > 0){
    echo "data ada";
}else{
    echo "data tidak ada";
}
$data = mysqli_fetch_assoc($query);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $query_update = mysqli_query($con, "UPDATE `makanan` SET `nama`='$nama', `harga`= '$harga' WHERE id = '$id'");
    //mysqli_query itu buat ngejalanin query di php
    
}

?>


<form action=" " method="post">
    <label for="nama">Nama :</label> 
    <!-- for itu sama dengan id jdi berkaitan -->
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama anda" value="<?= $data["nama"] ?>"> <br><br>
    <label for="harga">Harga :</label> 
    <input type="number" name="harga" id="harga" placeholder="Masukkan harga" value="<?= $data["harga"] ?>"> <br><br>
    <button type="submit">SIMPAN</button>
</form>
<?php

if ($query_update){
    echo "<script>
    alert('Data Berhasil Diupdate');
    window.location.href = 'view.php';
    </script>";
} else {
    echo "<br>Data Gagal Disimpan";
}
?>