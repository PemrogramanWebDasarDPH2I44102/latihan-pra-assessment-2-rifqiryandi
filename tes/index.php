<form method="POST">
	nama:<input type="text" name="nama"><br>
	nip :<input type="number" name="nip"><br>
	<input type="submit" name="send" value="login"><br>
	<a href="regis.php">Regis</a>
</form>

<?php 
include 'konek.php';
session_start();

if (isset($_POST['send'])) {
	$que = mysqli_query($conn,"SELECT * FROM karyawan");
	$_SESSION['nama']=$_POST['nama'];
	$_SESSION['nip']=$_POST['nip'];
	while ($ac = mysqli_fetch_array($que)) {
			if ($_POST['nama']==$ac['namak']&&$_POST['nip']==$ac['nip']) {
				header("Location:tampil.php");
			}
		}	
}
 ?>