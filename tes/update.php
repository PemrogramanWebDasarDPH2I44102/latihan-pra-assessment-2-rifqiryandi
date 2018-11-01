<?php 
include 'konek.php';
session_start();
$namak = $_SESSION['nama'];
$que = mysqli_query($conn,"SELECT * FROM penghuni");
$p = $_GET['isi'];
$qu = mysqli_query($conn,"SELECT * FROM paket WHERE id='$p'");
$is = mysqli_fetch_array($qu);
 ?>
<form method="POST">
	isi paket:<input type="text" name="isi" value=<?php echo $is['isipaket']; ?>><br>
	Sasaran:<select name="pilih">
		<?php 
			while ($acc = mysqli_fetch_array($que)) {
				echo "<option value=".$acc['namap'].">".$acc['namap']."</option>";
			}
		 ?>
	</select><br>
	<!-- Tanggal datang:<input type="date" name="tglsaat ini"> -->
	tanggal ambil:<input type="date" name="tgl" value=<?php echo $is['tglam']; ?>><br>
	<input type="submit" name="simpan" value="simpan"><br>
	<a href="list.php">back</a>
</form>
<?php 
if (isset($_POST['simpan'])) {
	$isi = $_POST['isi'];
	$sas = $_POST['pilih'];
	$tgl = $_POST['tgl'];
	// $tgld=date('Ymd');

	$query = mysqli_query($conn,"UPDATE paket SET sasaran='$sas',isipaket='$isi',tglam='$tgl' WHERE id='$p'"); 
	if ($query) {
		echo "berhasil";
	}
}