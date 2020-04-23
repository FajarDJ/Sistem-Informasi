<?php

include '../../koneksi.php';

$id = $_POST['id'];
$dmharga = $_POST['dmharga'];

mysqli_query($koneksi , "UPDATE sd set dmharga='$dmharga' where id='$id'");
header('location:../admin.php');

 ?>
