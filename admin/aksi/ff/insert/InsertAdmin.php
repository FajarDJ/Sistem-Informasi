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
$dmharga = $_POST ['dmharga'];

mysqli_query($koneksi , "INSERT INTO ff VALUES ('$id' , '$dmharga')");
header("location:../admin.php");
?>
</body>
</html>
