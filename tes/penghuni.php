<form method="POST">
	nama:<input type="text" name="nama"><br>
	unit:<input type="text" name="unit"><br>
	ktp:<input type="number" name="ktp"><br>
	<input type="submit" name="send" value="submit"><br>
	<a href="tampil.php">back</a>
</form>
<?php 
include 'konek.php';
if (isset($_POST['send'])) {
	$nama = $_POST['nama'];
	$unit = $_POST['unit'];
	$ktp = $_POST['ktp'];

	$qu = mysqli_query($conn,"INSERT INTO penghuni(namap, unit, ktp) VALUES ('$nama','$unit','$ktp')");
	if ($qu) {
		echo "Berhasil";
	}
}
 ?>