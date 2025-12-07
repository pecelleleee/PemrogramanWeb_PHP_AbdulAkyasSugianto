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
    
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    
    <table border="1">
        
        <tr>
            <th class="poppins-bold">No</th>
            <th class="poppins-bold">NIM</th>
            <th class="poppins-bold">Nama</th>
            <th class="poppins-bold">Program Studi</th>
            <th class="poppins-bold">Jenis Kelamin</th>
            <th class="poppins-bold">Alamat</th>
        </tr>
        
        <?php
            $no = 1;
            while ($baris = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td class="poppins-regular"><?php echo $no++ ?></td>
                    <td class="poppins-regular"><?php echo $baris['nim'] ?></td>
                    <td class="poppins-regular"><?php echo $baris['nama'] ?></td>
                    <td class="poppins-regular"><?php echo $baris['prodi'] ?></td>
                    <td class="poppins-regular"><?php echo $baris['jenisKelamin'] ?></td>
                    <td class="poppins-regular"><?php echo $baris['alamat'] ?></td>
                </tr>
                <?php
            }
            ?>

</table>

<a href="index.html" class="poppins-bold">Tambah Data</a>


</body>
</html>
