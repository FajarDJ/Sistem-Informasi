<?php
require '../aksi/koneksi.php';

function tangkap($data) {
	$id = $_POST["id"];
	$username = $_POST["username"];
	$pass = $_POST["password"];
	$nama = $_POST["nama"];
  $ket = $_POST['ket'];
}

function tambahakun($data) {
	global $koneksi;

	$id = htmlspecialchars($data["id"]);
	$username = htmlspecialchars($data["username"]);
	$pass = htmlspecialchars($data["password"]);
	$nama = htmlspecialchars($data["nama"]);
  $ket = htmlspecialchars($data['ket']);

	// upload gambar
	$foto = upload();
	if (!$foto) {
		return false;
	}


	mysqli_query($koneksi, "INSERT INTO admin VALUES('$id','$username','$pass','$nama','$ket' , '$foto')");
	return mysqli_affected_rows($koneksi);
}

function upload(){

	$namafile = $_FILES['foto']['name'];
	$ukuranfile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpname = $_FILES['foto']['tmp_name'];

	// cek apakah tidak ada gambar yg di upload
	if ($error === 4) {
		echo "<script>
				alert('pilih foto anda terlebih dahulu!');
			</script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$fotovalid = ['jpg', 'jpeg', 'png'];
	$ekstensifoto = explode('.', $namafile);
	$ekstensifoto = strtolower(end($ekstensifoto));
	if (!in_array($ekstensifoto, $fotovalid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranfile > 1000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			</script>";
		return false;
	}

	// lolos pengecekan gambar siap di upload
	move_uploaded_file($tmpname,'../dist/img/'.$namafile);
	return $namafile;


}
header('formlogin.php');

?>
