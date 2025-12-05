<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
</head>
<body>

    <h1>FORMULIR DATA MAHASISWA</h1>
    <form action="Logic.php" method="post">

    <label>NIM: </label>
    <input type="number" name="nim">
    <br>

    <label>NAMA: </label>
    <input type="text" name="name">
    <br>

    <label>PRODI: </label>
    <input type="text" name="prodi">
    <br>

    <label>Laki-laki</label>
    <input type="radio" name="JenisKelamin" value ="laki-laki">
    <br>

    <label >Perempuan</label>
    <input type="radio" name="JenisKelamin" value ="perempuan">
    <br>

    <label>ALAMAT: </label><br>
    <textarea name="alamat"></textarea>
    <br>

    <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>