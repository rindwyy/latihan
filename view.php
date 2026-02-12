<?php
include './lib/koneksi.php';

$query = mysqli_query($con, "SELECT * FROM `makanan`");
?>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($query->num_rows > 0):
            //krn pke : utk penutup if jdi tidak pke kurung kurawal {} 
            //jika query nya jumlah rownya lbh dri 0 maka if dijalan kan
            ?>
            <?php
            $i = 1;
            
            ?>
            <?php while ($data = mysqli_fetch_assoc($query)): 
                // selmaaa ada data akan di ambil datanya dan kan di tutup while ny pke ":" jdi ditu penggunakan endwhile ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["harga"] ?></td>
                    <td>
                        <a href="update.php?id=<?=$data["id"] ?>">Edit</a>
                        <a href="delete.php?id=<?=$data["id"] ?>" onclick="confirm('serius?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Data tidak ada</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>