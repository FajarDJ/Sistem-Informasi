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
$cpharga = $_POST ['cpharga'];

mysqli_query($koneksi , "INSERT INTO codm VALUES ('$id' , '$cpharga')");
header("location:../admin.php");
?>
</body>
</html>
