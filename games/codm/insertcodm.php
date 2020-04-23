<?php
include '../../koneksi.php';
$idpemb = $_POST['idpemb'];
$id = $_POST ['id'];
$cp = $_POST ['cpharga'];
$email = $_POST ['email'];

mysqli_query($koneksi , "INSERT INTO usercodm VALUES ('$idpemb' , '$id' , '$cp' , '$email')");
header("location:../../pembayaran/listcodm.php");
?>
