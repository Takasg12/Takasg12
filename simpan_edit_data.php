<?php

include('koneksi.php');

// Data
$judul = $_POST['judul'];
$id = $_POST['id'];

// insert data ke database
$sql = "update list set judul='$judul' where id='$id'";
mysqli_query($koneksi, $sql) or die("Gagal sql");

// pindah halaman 
header("location:index.php");