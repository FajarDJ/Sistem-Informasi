<?php

include '../../koneksi.php';

$id = $_POST['id'];
$vcharga = $_POST['vcharga'];
$email = $_POST['email'];

mysqli_query($koneksi , "UPDATE useraov set vcharga='$vcharga' where id='$id'");
header('location:../admin.php');

 ?>
