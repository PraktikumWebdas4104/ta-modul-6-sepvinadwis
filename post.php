<center>
<table border="2" width="600">
	<tr>
		<th width="100"><a href = "halamanawal.php">HOME</HEAD></a></th>
		<th width="200"><a href="editprofile.php">EDIT PROFILE</a></th>
		<th width="100"><a href="posting.php">POSTING</a></th>
		<th width="250"><a href="daftarpostingan.php">LIAT POSTINGAN</a></th>
		<th width="300"><a href="semuaposting.php">LIAT SEMUA POSTINGAN</a></th>
		<th width="100"><a href="logout.php">KELUAR</a></th>
	</tr>
</table></center><br>
<form method="POST">
		<center><h3>POSTING CERITA</h3></center>
	<table>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="images"></td>
		</tr>
		<tr>
			<td>Ceritamu :</td>
			<td><textarea rows="20" cols="75" name="cerita"></textarea>
		</tr>

	</table>
	<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="posting" value="POSTING">&nbsp;&nbsp;
	<a href="halawal.php"><input type="button" name="back" value="Kembali"></a>&nbsp;&nbsp;
	<a href="dafpostingan.php"><input type="button" name="lihat" value="Cek Postingan"></a>

</form>
<?php 
		if(isset($_POST['posting'])){
			session_start();
			error_reporting(0);
			$foto=$_FILES['gambar']['images'];
			
			$cerita=$_POST['cerita'];
			$nim=$_SESSION['nim'];
			$nama=$_SESSION['nama'];
			$_SESSION['cerita']=$cerita;
			$_SESSION['foto']=$foto;

			$host="localhost";
			$user="root";
			$pass="";
			$db="mahasis";
			$conn=mysqli_connect($host,$user,$pass,$db);

			if(str_word_count($cerita)>=30){
			$sql=$conn->query("INSERT INTO `posting`(`nim`,`nama`,`foto`,`cerita`) VALUES ('$nim','$nama','$foto','$cerita')");
			move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
			echo "Cerita Berhasil DIPOSTING"; 

			}else{
				echo "Maaf Jumlah kata MINIMAL 30!";
			}
		}
 ?>
