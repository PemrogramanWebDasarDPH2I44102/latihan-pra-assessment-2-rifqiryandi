<?php 
include 'konek.php';
$que = mysqli_query($conn,"SELECT * FROM paket");
echo "<table border='2'>";
echo "<th>Tanggal datang</th><th>Sasaran</th><th>Penerima</th><th>isi paket</th><th>Tanggal ambil</th><th>aksi</th>";
while ($ac = mysqli_fetch_array($que)) {
	echo "<tr>";
	echo "<td>".$ac['tgld']."</td>";
	echo "<td>".$ac['sasaran']."</td>";
	echo "<td>".$ac['penerima']."</td>";
	echo "<td>".$ac['isipaket']."</td>";
	echo "<td>".$ac['tglam']."</td>";
	echo "<td><a href=update.php?isi=".$ac['id'].">edit</a></td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='tampil.php'>back</a>";
 ?>