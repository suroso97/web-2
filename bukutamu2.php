<html>

<head>

<title>komentar</title>

</head>

<body>

<form action="bukutamu.php" method="post" enctype="multipart/form-data" name="form1">

<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">

<tr>

<td width="9%">Nama</td>

<td width="91%"><input name="nama" type="text" id="nama" size="20"></td>

</tr>

<tr>

<td>Email</td>

<td><input type="text" name="email" size="20"></td>

</tr>

<tr>

<td>Komentar</td>

<td><textarea name="komentar" cols="50" rows="5" id="komentar"></textarea></td>

</tr>

<tr>

<td>&nbsp;</td>

<td><input type="submit" value="Submit" name="submit">

<input type="reset" value="reset" name="reset"></td>

</tr>

</table>

</form>

<p align="center"><br>

<br>

<?php

$file = "jumlah.txt";

$fp = fopen($file,"r");

if ($fp)

{

$baca = fgets($fp,50);

print ("$baca");

}

fclose($fp);

?>

komentar<?php

$file = "komentar.txt";

$fp = fopen($file,"r");

while (!feof($fp))

{

$baca = fgets($fp,50);

print("$baca");

}

fclose($fp);

?>

</p>

<p>&nbsp;</p>

</body>

</html>
<?php

$nama = $_POST['nama'];

$komentar = $_POST['komentar'];

$email=$_POST['email'];

$waktu = date("d-m-y | H:i:s");

$nf = "komentar.txt";

$fp = fopen($nf,"r+");

$data = fgets ($fp,50);

$comfile = file($nf);

rewind($fp);

fwrite($fp,



"<table width=500 align=center bgcolor=#CCCCCC>

<tr bgcolor=#006600>

<td width=250><font color =white> nama </font> <font color =red> $nama </font> <font color =white> email <font> <font color =red>$email </font></td>

<td ><font color =white>tanggal </font> <font color =red> $waktu</font></td>

</tr>

<tr>

<td colspan = 2 >berkata :$komentar</td>

</tr>

</table>

<br>

");
for ($i = 0; $i < 999; $i++)

{

fwrite ($fp, $comfile[$i]);

}

fclose ($fp);

if ($_POST['submit']) {

header ("location: index.php");

}

?>

<?php

$file = "jumlah.txt";

$open = fopen($file,"r+");

$counter=fread($open,filesize($file));

fclose($open);

$counter++;

$write=fopen($file,'w');

fputs($write,$counter);

fclose($write);

?>
