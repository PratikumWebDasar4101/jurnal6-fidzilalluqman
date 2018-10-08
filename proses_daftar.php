<?php 
require_once("db_mahasiswa.php");
$nama			= $_POST['nama'];
$nim			= $_POST['nim'];
$kelas			= $_POST['kelas'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$hobi			= $_POST['hobi'];
$fakultas		= $_POST['fakultas'];
$alamat			= $_POST['alamat'];

$sql = "INSERT INTO mahasiswa (nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat)
	   	VALUES ('$nama', '$nim', '$kelas', '$jenis_kelamin', '$hobi', '$fakultas', '$alamat')";

if (mysqli_query($conn, $sql)) {
	echo "Data Berhasil Di Tambahkan";
} else{
	echo "error". $sql . "<br>" . mysqli_error($conn);
}

?>