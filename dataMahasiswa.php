<?php

$koneksi = mysqli_connect("localhost", "root", "", "phpDiscord");
$query = "SELECT * FROM FORMULIR";
$result = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    
    <table border="1">
        
        <tr>
            <th>Nomor</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        
        <?php
            $no = 1;
            while ($baris = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $baris['nim'] ?></td>
                    <td><?php echo $baris['nama'] ?></td>
                    <td><?php echo $baris['prodi'] ?></td>
                    <td><?php echo $baris['jenisKelamin'] ?></td>
                    <td><?php echo $baris['alamat'] ?></td>
                </tr>
                <?php
            }
            ?>

</table>

<a href="form.html">Tambah Data</a>

</body>
</html>
