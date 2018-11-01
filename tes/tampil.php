<?php 
session_start();

// echo "$tgld";
 ?>

	Nama:<?php echo $_SESSION['nama']; ?><br>
	Nip:<?php echo $_SESSION['nip']; ?><br>
	<a href="paket.php">create paket</a>//<a href="list.php">list paket</a>//<a href="penghuni.php">create penghuni</a>//<a href="index.php">log out</a>
	
