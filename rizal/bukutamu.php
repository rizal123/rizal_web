<?php
include"koneksi.php";

$tampil="SELECT*FROM bukutamu ORDER BY id DESC";
$hasil=mysql_query($tampil);
echo"<center>BUKU TAMU rizal
<TABLE BORDER=1 width=800>
<tr>
	<th width=200>Nama</th>
	<th width=590>Alamat</th>
	<th width=590>Pesan</th>

</tr> </center>";
while($data=mysql_fetch_array($hasil))
{
	echo"<tr><td>$data[nama]</td>";
	echo"<td>$data[alamat]</td>";
	echo"<td>$data[pesan]</td></tr>";
}
echo"</table>";
echo"</center>";
?>
