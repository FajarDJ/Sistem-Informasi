<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <?php
include '../../koneksi.php';
$id = $_POST['id'];
$vcharga = $_POST ['vcharga'];

mysqli_query($koneksi , "INSERT INTO aov VALUES ('$id' , '$vcharga')");
header("location:../admin.php");
?>
</body>
</html>
