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
</table></center><br><br><br><br>
<table border="3">
	<tr>
		<th>NIM</th> <th>Nama</th> <th>Foto</th> <th>Postingan</th>
	</tr>
<?php 
		session_start();
		$host="localhost";
		$user="root";
		$pass="";
		$db="mahasis";
		$conn=mysqli_connect($host,$user,$pass,$db);
		$nim=$_SESSION['nim'];
		$sql=$conn->query("SELECT `nim`,`nama`,`foto`,`cerita` FROM `posting` WHERE `nim`='$nim'");
		$no=1;
		while($row=mysqli_fetch_array($sql)){
			echo"<tr>
					<td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td>
					<td><a href='edpostingan.php'>Edit</a></td>
				</tr>";
			$no++;			
		}
 ?>
</table>