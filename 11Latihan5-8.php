// latihan 5

<?php

	$conn = mysqli_connect("localhost","root","","lat_dbase");
	if (mysqli_connect_eror())
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror();
	}
	$sql = "SELECT * FROM tbl_mhs";
	if ($hasil=mysqli_query($koneksi,$sql))
	{
		While($data=mysqli_fetch_row($hasil))
		{
			echo "$data[0] $data[1] $data[2]";
		}
		mysqli_result($hasil);
	}	

?>

//latihan 6

<?php
	$conn=mysqli_connect("localhost","root","","Universitas_db");
	if (mysqli_connect_errno())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_error();
  	}
      echo "koneksi berhasil";

  	$sql = "SELECT * FROM tbl_mahasiswa";
	if ($hasil=mysqli_query($conn,$sql))
	{
		While($data=mysqli_fetch_array($hasil))
		{
			echo "$data [FirstName] $data[LastName] $data[Age]";
		}
		mysqli_free_result($hasil);
	}
    
?>

//latihan 7

<?php
	$conn=mysqli_connect("localhost","root","","Universitas");
	if (mysqli_connect_eror())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_eror();
  	}  	
      echo "koneksi berhasil";
  	$sql = "SELECT * FROM tbl_mahasiswa";
	if ($hasil=mysqli_query($conn,$sql))
	{
		$hit=mysqli_num_rows($hasil);
		echo "Jumlah Record $hit";
	}
	
?>

//latihan 8

<?php
$conn=mysqli_connect("localhost","root","","Universitas_db");
	if (mysqli_connect_eror())
  	{
  		echo "Koneksi database gagal : ".mysqli_connect_eror();
  	}
      echo "koneksi berhasil";

  	$nm_dpn = $_POST['firstname'];
	$nm_blkang = $_POST['lastname'];
	$age = $_POST['age'];

	$sql = "INSERT INTO tbl_mahasiswa (FirstName, LastName, Age) VALUES('$nm_dpn','$nm_blkang','$age')"
	$query = mysqli_query($conn, $sql) or die (mysqli_eror());

	if($query){
		echo "Data berhasil di insert";
	}
	else
	{
		echo "Error :".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>