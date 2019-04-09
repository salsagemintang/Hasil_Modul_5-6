<?php

include '../connect.php';

$kode = $_POST['kode'];
$nama_matkul = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
$id_dosen = $_POST['id_dosen'];

$query = "INSERT INTO matakuliah
          VALUES ('$kode', '$nama_matkul', '$sks', '$semester','$id_dosen')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Tambah Data <br>";
}
else
{
    echo "Gagal Tambah Data <br>";
}

echo "<a href='read.php'> Lihat Data</a>";

?>