<form method="POST">
	Nama:<input type="text" name="namap"><br>
	nip:<input type="number" name="nip"><br>
	<input type="submit" name="send" value="submit"><br>
	<a href="index.php">Login</a>
</form>

<?php
include 'konek.php'; 
if (isset($_POST['send'])) {
	$nama = $_POST['namap'];
	$nip = $_POST['nip'];

	$que = mysqli_query($conn,"INSERT INTO karyawan(namak, nip) VALUES ('$nama','$nip')");
	if ($que) {
		echo "Berhasil";
	}
}
 ?>