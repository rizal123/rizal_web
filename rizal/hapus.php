<?php
echo"<center>";
echo"HAPUS";
include"koneksi.php";
$tampil="SELECT*FROM bukutamu ORDER BY id DESC";
$hasil=mysql_query($tampil);

while($data=mysql_fetch_array($hasil))
{

echo"<FORM METHOD=GET ACTION=hapusbk.php>
<table>
	<tr><td>Id</td>
		<td>:</td>
		<td><input type=text name=id value=$data[id]><br></td>
	</tr>
<tr><td>Nama</td>
		<td>:</td>
		<td><input type=text name=nama value=$data[nama]><br></td>
	</tr>
<tr><td>Alamat</td>
		<td>:</td>
		<td><input type=text name=alamat value=$data[alamat]><br></td>
	</tr>

<tr><td>pesan</td>
		<td>:</td>
		<td><textarea cols=30 rows=4 name=pesan>$data[pesan]</textarea><br></td>
	</tr>
</table>	
<input type=submit name=tombol value=Hapus></form>";
}
?>