<?php

include '../connect.php';

$kode = $_GET['kode'];
$query ="DELETE FROM matakuliah WHERE kode = '$kode'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    echo "Berhasil Hapus Data <br>";
}
else
{
    echo "Gagal Hapus Data <br>";
}

echo "<a href='read.php'> Lihat Data</a>";
?>