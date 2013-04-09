<html>
<head>
<title>Halo Semua</title>
<style type="text/css">
td{
background-color:#FFFFFF;
padding:10px;
}
#ab{
text-decoration:underline;
}

body {
	background-color: #CCCCCC;
}
#head{
	background-color:#FFFFCC;
}
#kiri{	
	text-indent:15px;
}

/* sliding photo */

.navtext {
	font-size:7pt;
	-moz-border-radius:5px;
	border:8px solid #333333;
	background-color:tan;
	background-color:#666666;
	position:absolute; 
	padding:10px;
	visibility: hidden; 
	opacity: 1.07;
	color:#ffffff;
	float:left;
	line-height:1.8em;
	
}

#xy{
	color:red;
	font-weight:bold;
	font-size:10px;
	font-family:tahoma;
	margin:8px;
}

#img1{
	width:125px;
	height:125px;
	border:1px;
	-moz-border-radius:10px;
	margin:10px;
}
#name{
	text-align:center;
	
	
}
#name1{
	background-color:#333333;
	font:bold 10px tahoma;
	-moz-border-radius:5px;
	padding:5px 10px 5px 10px;

	
}
</style>
</head>

<body><center>

<table width="75%" bordercolor="ede9e3" border="1" >

  <tr>
    <td colspan="2"><img src="images/images1.jpg" width="100%" height="234"></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="ede9e3"><span class="style4">
    <marquee scrollamount="3"><strong><blink>WELCOME TO MY SITE</blink></strong> </font>
    </marquee></span></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="ede9e3"><p align="center"><strong>MENU UTAMA<BR>
	</strong><a href="index.html"><u>Home</u></a><br>
        <a href="profil.html">Profil</a><br>
        <a href="bukutamu.php">Buku Tamu</a><br>
        <a href="tulis.html">Tulis Buku Tamu</a>	  <br>
        <a href="hapus.php">Hapus Buku Tamu</a><br>
        <a href="edit.php">Edit Buku Tamu</a></p>    </td>
    <td width="74%" valign="top" bgcolor="ede9e3"><p align="center" class="style5">SELAMAT DATANG </p>
  </td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/images2.jpg" width="100%" height="83"><center>@copy right rizal 2012</center></td>
	

  </tr>
</table>
</center>
</body>
</html>
<?php
include"koneksi.php";
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$pesan= $_GET['pesan'];
$perintah="INSERT INTO bukutamu(nama,alamat,pesan)
	values('$nama','$alamat','$pesan')";
$hasil=mysql_query($perintah);

echo"<center>HORE BERHASIL <a href=index.html>kembali</a></CENTER>";
?>


