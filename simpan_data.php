<?php

include('koneksi.php');

// Data
$judul = $_POST['judul'];

// insert data ke database
$sql = "insert into list ( judul ) values ('$judul')";
mysqli_query($koneksi, $sql) or die("Gagal simpan data");

// pindah halaman 
header("location:index.php");
