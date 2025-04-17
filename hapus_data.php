<?php

include('koneksi.php');

// masukan parameter
$id = $_GET['id'];

// hapus data 
$sql = "delete from list where id ='$id'";
mysqli_query($koneksi, $sql) or die('Gagal hapus data');

// kembali ke halaman utama atau index.php
header("location:index.php");
