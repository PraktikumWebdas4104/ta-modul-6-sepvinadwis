<br><br><center>
<table border="2" width="600">
	<tr>
		<th width="100"><a href = "halawal.php">HOME</HEAD></a></th>
		<th width="200"><a href="edprofile.php">EDIT PROFILE</a></th>
		<th width="100"><a href="post.php">POSTING</a></th>
		<th width="250"><a href="dafpostingan.php">LIAT POSTINGAN</a></th>
		<th width="300"><a href="semuaposting.php">LIAT SEMUA POSTINGAN</a></th>
		<th width="100"><a href="logout.php">KELUAR</a></th>
	</tr>
</table></center><br><br>
<?php 
	session_start();
	echo "<center>"; "Halo"." ".$_SESSION['nama']."<br>";
	"Berikut data diri anda :"."<br>";
	"Nama 			:"." ".$_SESSION['nama']."<br>";
	"Nim 			:"." ".$_SESSION['nim']."<br>";
	"Password 		:"." ".$_SESSION['password']."<br>";
	"Kelas 		:"." ".$_SESSION['kelas']."<br>";
	"Jenis Kelamin :"." ".$_SESSION['jeniskelamin']."<br>";
	"Hobi 			:"." ".$_SESSION['hobi']."<br>";
	"Fakultas 		:"." ".$_SESSION['fakultas']."<br>";
	"Alamat 		:"." ".$_SESSION['alamat']."<br>";
	"</center>";
 ?>