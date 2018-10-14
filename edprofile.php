<?php 
	session_start();
 ?>
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
</table></center><br><br>
<form method="POST">
	<center><h3>Edit Profile</h3></center><br><br>
	<table>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama" length=35 value="<?php echo $_SESSION['nama']?>"></td>
		</tr>
		<tr>
			<td>NIM :</td>
			<td><input type="number" name="nim" length=10 value="<?php echo $_SESSION['nim'];?>"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="text" name="password" length=15 value="<?php echo $_SESSION['password'];?>">
		</tr>
		<tr>
			<td>Kelas : </td>
			<td><input type="radio" name="kelas" value="MI04">MI04</td> <td><input type="radio" name="kelas" value="MI03" >MI03</td> <td><input type="radio" name="kelas" value="MI02" >MI02</td> <td><input type="radio" name="kelas" value="MI01">MI01</td>
		</tr>
		<tr>
			<td>Jenis Kelamin : </td>
			<td><input type="radio" name="jenkel" value="Laki-Laki" >Laki-Laki</td> <td><input type="radio" name="jenkel" value="Perempuan">Perempuan </td>
		</tr>
		<tr>
			<td>Hobi : </td>
			<td><input type="checkbox" name="hobi" value="Lari">Lari</td>
			<td><input type="checkbox" name="hobi" value="Shopping"> Shopping</td> 
			<td><input type="checkbox" name="hobi" value="Berenang">Berenang</td>
			<td><input type="checkbox" name="hobi" value="Bersepedah">Bersepeda</td>
			<td><input type="checkbox" name="hobi" value="Mendaki">Mendaki</td>
		</tr>
		<tr>
			<td>Fakultas : </td>
			<td><select name ="fakultas">
			<td><option value="Fakultas Ilmu Terapan" <?php if($_SESSION['fakultas']=='Fakultas Ilmu Terapan'){echo'selected';}?>>Fakultas Ilmu Terapan</option></td>
			<td><option value="Fakultas Ekonomi dan Bisnis" <?php if($_SESSION['fakultas']=='Fakultas Ekonomi dan Bisnis'){echo'selected';}?>>Fakultas Ekonomi dan Bisnis</option></td>
			<td><option value="Fakultas Industri Kreatif " <?php if($_SESSION['fakultas']=='Fakultas Industri Kreatif'){echo'selected';}?>>Fakultas Industri Kreatif</option></td>
			<td><option value="Fakultas Komunikasi Bisnis" <?php if($_SESSION['fakultas']=='Fakultas Komunikasi Bisnis'){echo'selected';}?>>Fakultas Komunikasi Bisnis</option></td>
		</tr>
		<tr>
			<td>Alamat : </td>
			<td><textarea name="alamat" cols ="20" row = "10" value="<?php echo $_SESSION['alamat'];?>"></textarea></td>
		</tr>
	</table>
	<br><br>&nbsp;&nbsp;
	<input type="submit" name="update" value="update"> &nbsp; <a href="halawal.php"><input type="button" name="back" value="BACK"></a>
	
</form>
<?php 
	error_reporting(0);

	if(isset($_POST['update'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$password=$_POST['password'];
		$kelas=$_POST['kelas'];
		$jk=$_POST['jenkel'];
		$hobby=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];

		$host="localhost";
		$user="root";
		$pass="";
		$db="mahasis";
		$conn=mysqli_connect($host,$user,$pass,$db);

		$sql=$conn->query("UPDATE `datamahasis` SET `nama`='$nama',`nim`='$nim',`password`='$password',`kelas`='$kelas',`jenis_kelamin`='$jek',`hobi`='$hobby',`fakultas`='$fakultas',`alamat`='$alamat'");
		echo "BERHASIL UPLOAD";

	}


 ?>