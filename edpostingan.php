<center>
<table border="2" width="600">
	<tr>
		<th width="100"><a href = "halawal.php">HOME</HEAD></a></th>
		<th width="200"><a href="edprofile.php">EDIT PROFILE</a></th>
		<th width="100"><a href="post.php">POSTING</a></th>
		<th width="250"><a href="dafpostingan.php">LIAT POSTINGAN</a></th>
		<th width="300"><a href="semuaposting.php">LIAT SEMUA POSTINGAN</a></th>
		<th width="100"><a href="logout.php">KELUAR</a></th>
	</tr>
</table></center><br>
<<?php 
	session_start();
 ?>
<form method="POST">
		<center><h3>POSTING CERITA</h3></center>
		<table>
			<tr>
				<td>Foto :</td>
				<td><input type="file" name="images" value ="<?php echo $_SESSION['foto']; ?>"></td>
			</tr>
			<tr>
				<td>Cerita :</td>
				<td><textarea rows="20" cols="75" name="cerita" value ="<?php echo $_SESSION['cerita']; ?>"></textarea>
			</tr>

		</table>
	<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
	<input type="submit" name="editpost" value="EDIT POSTING">&nbsp;&nbsp;&nbsp;
	<a href="halawal.php"><input type="button" name="back" value="BACK"></a>&nbsp;&nbsp;&nbsp;
	<a href="dafpostingan.php"><input type="button" name="lihat" value="Liat Postingan"></a>
	<?php 

		if(isset($_POST['editpost'])){
			$gambar=$_POST['images'];
			$story=$_POST['cerita'];
			$nim=$_SESSION['nim'];
			$cerita=$_SESSION['cerita'];

			$host="localhost";
			$user="root";
			$pass="";
			$db="mahasis";
			$conn=mysqli_connect($host,$user,$pass,$db);
			$sql=$conn->query("UPDATE `posting` SET `foto`='$gambar', `cerita`=$story WHERE `nim`=$nim AND `cerita`=$cerita");
			//move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
			echo "Postingan Berhasil diupdate";
		}
	 ?>