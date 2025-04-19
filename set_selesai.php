<?php

include('koneksi.php');

// masukan parameter
$id = $_GET['id'];

// hapus data 
$sql = "update list set setatus_selesai=1 where id ='$id'";
mysqli_query($koneksi, $sql) or die('Gagal hapus data');

// kembali ke halaman utama atau index.php
header("location:index.php");
