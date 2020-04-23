<?php
include '../../koneksi.php';
$idpemb = $_POST['idpemb'];
$id = $_POST ['id'];
$dm = $_POST ['dmharga'];
$email = $_POST ['email'];

mysqli_query($koneksi , "INSERT INTO usersd VALUES ('$idpemb' , '$id' , '$dm' , '$email')");
header("location:../../pembayaran/listsd.php");
?>
