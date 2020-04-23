<?php

include '../../koneksi.php';

$id = $_POST['id'];
$vcharga = $_POST['vcharga'];

mysqli_query($koneksi , "UPDATE aov set vcharga='$vcharga' where id='$id'");
header('location:../admin.php');

 ?>
