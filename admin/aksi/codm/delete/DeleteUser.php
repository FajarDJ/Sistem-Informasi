<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <?php
include '../../koneksi.php';
$id = $_GET ['id'];

mysqli_query($koneksi , "DELETE FROM usercodm WHERE id ='$id'");
header("location:../user.php");
?>
</body>
</html>
