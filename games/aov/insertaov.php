<?php
include '../../koneksi.php';
$idpemb = $_POST['idpemb'];
$id = $_POST ['id'];
$vc = $_POST ['vcharga'];
$email = $_POST ['email'];

mysqli_query($koneksi , "INSERT INTO useraov VALUES ('$idpemb' , '$id' , '$vc' , '$email')");
header("location:../../pembayaran/listaov.php");
?>
