<?php 
include 'konek.php';
session_start();
$namak = $_SESSION['nama'];
$que = mysqli_query($conn,"SELECT * FROM penghuni");
 ?>
<form method="POST">
	isi paket:<input type="text" name="isi"><br>
	Sasaran:<select name="pilih">
		<?php 
			while ($acc = mysqli_fetch_array($que)) {
				echo "<option value=".$acc['namap'].">".$acc['namap']."</option>";
			}
		 ?>
	</select><br>
	<!-- Tanggal datang:<input type="date" name="tglsaat ini"> -->
	tanggal ambil:<input type="date" name="tgl"><br>
	<input type="submit" name="simpan" value="simpan"><br>
	<a href="tampil.php">back</a>
</form>
<?php 
if (isset($_POST['simpan'])) {
	$isi = $_POST['isi'];
	$sas = $_POST['pilih'];
	$tgl = $_POST['tgl'];
	$tgld=date('Ymd');

	$query = mysqli_query($conn,"INSERT INTO paket(tgld, sasaran, penerima, isipaket, tglam, id) VALUES ('$tgld','$sas','$namak','$isi','$tgl','')"); 
	if ($query) {
		echo "berhasil";
	}
}
 ?>