//latihan 1

<?php 
 	
 	$koneksi = mysqli_connect("localhost","root","","db_password");

	//Cek koneksi
	if (mysqli_connect_eror()) //memeriksa koneksi
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror(); //menampilkan eror pada koneksi
	}
?>


//latihan 2

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '<password here>';


$conn = mysqli_connect("localhost","root","password");

if($conn){
    echo 'connected fail';//koneksi gagal
}
    echo 'connected success';//koneksi berhasil

$sql = "CREATE DATABASE Universitas";

    if(mysqli_query($conn , $sql)){
        echo "Database berhasil dibuat";
    } else {
        echo "eror creating database: ";

    }
?>

//latihan 3

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysqli_connect("localhost" , "root" , "password");
if($conn){
    die('gagal koneksi: ' . mysqli_eror());

}
echo 'koneksi berhasil';
$sql = "CREATE TABLE mahasiswa('mhsID int NOT NULL AUTO_INCREMENT ',
                                'PRIMARY KEY(mhsID) ',
                                'FirstName varchar(15) ',
                                'LastName varchar(15) ',
                               'Age int'
                                )";

mysqli_select_db('universitas_db');
if(mysqli_query($sql , $conn)){
    echo  "Tabel berhasil dibuat";
} else {
    echo "Tabel berhasil dibuat";
}
?>

//latihan 4

<?php
	
	$conn = mysqli_connect("localhost","root","","Universitas");
	//Cek koneksi
	if (mysqli_connect_eror()) //memeriksa koneksi berhasil atau tidak
	{
		echo "Koneksi database gagal : ".mysqli_connect_eror(); //menampilkan eror pada koneksi
	}
    echo "koneksi database berhsil';

	$sql = "INSERT INTO tbl_mahasiswa VALUES('Karina','Suwandi','29'),('Glenn','Gandari','32')";
    //cek apakah proses simpan berhasil
    if (mysqli_query($conn, $sql))
    {
    	echo "Data Berhasil Disimpan";
    }
    else
    {
		echo "Gagal menyimpan data";
    }
?>