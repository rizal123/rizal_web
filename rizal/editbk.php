<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$alamat=$_GET['alamat'];
$pesan=$_GET['pesan'];
include "koneksi.php";
$update="UPDATE bukutamu SET nama='$nama',
				 alamat='$alamat', pesan='$pesan' WHERE id='$id'";
$hasil=mysql_query($update);

if($hasil)
{
echo("Berhasil diupdate");
}
else
{
echo "Gagal";
}
?>