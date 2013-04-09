<?php
echo"<center>";
include"koneksi.php";
$tampil="SELECT*FROM bukutamu ORDER BY id DESC";
$hasil=mysql_query($tampil);

while($data=mysql_fetch_array($hasil))
{

echo"<center>EDIT</center>";
echo"<FORM METHOD=GET ACTION=editbk.php>
<table >
	<tr><td>Id</td>
		<td>:</td>
		<td><input type=text name=id value=$data[id]><br></td>
	</tr>
<tr><td>Nama</td>
		<td>:</td>
		<td><input type=text size=20 maxlength=100 name=nama value=$data[nama]><br></td>
	</tr>
<tr><td>Alamat</td>
		<td>:</td>
		<td><input type=text size=20 maxlength=100 name=alamat value=$data[alamat]><br></td>
	</tr>

<tr><td>Pesan</td>
		<td>:</td>
		<td><textarea cols=30 rows=4 name=pesan>$data[pesan]</textarea><br></td>
	</tr>
</table>	
<input type=submit name=tombol value=Edit></form>";
}
?>