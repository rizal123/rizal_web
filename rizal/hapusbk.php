<?php
echo"<center>MENGHAPUS</center>";
$id=$_GET['id'];
include "koneksi.php";
$hapus="DELETE FROM bukutamu WHERE id='$id'";
$hasil=mysql_query($hapus);
if($hasil)
{
echo("Berhasil dihapus");
}
else
{
echo "Gagal";
}
echo"<center>HORE BERHASIL <a href=index.html>kembali</a></CENTER>";
?>