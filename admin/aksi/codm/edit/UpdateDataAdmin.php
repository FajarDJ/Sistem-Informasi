<?php

include '../../koneksi.php';

$id = $_POST['id'];
$cpharga = $_POST['cpharga'];

mysqli_query($koneksi , "UPDATE codm set cpharga='$cpharga' where id='$id'");
header('location:../admin.php');

 ?>
