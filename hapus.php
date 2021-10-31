<?php 
include 'koneksi.php';
$id = $_GET['id_barang'];
mysqli_query($con,"delete from barang where id='$id'");
header('location:home.php');
?>