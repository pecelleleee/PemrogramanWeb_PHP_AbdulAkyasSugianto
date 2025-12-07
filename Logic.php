<?php
$koneksi = mysqli_connect("localhost", "root", "", "phpDiscord");



$Vnim= $_POST["nim"];
$Vname= $_POST["name"];
$Vprodi= $_POST["prodi"];
$VjenisKelamin= $_POST["JenisKelamin"];
$Valamat= $_POST["alamat"];

$query = "INSERT INTO formulir(nim, nama, prodi, JenisKelamin, alamat) VALUES
('$Vnim', '$Vname', '$Vprodi', '$VjenisKelamin', '$Valamat')";

mysqli_query( $koneksi, $query);

header(header: "Location:dataMahasiswa.php");

// echo "$Vnim";
// echo "$Vname";
// echo "$Vprodi";
// echo "$VJenisKelamin";
// echo "$Valamat";

?>