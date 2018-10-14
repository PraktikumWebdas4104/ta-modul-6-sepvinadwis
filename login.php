<form method="POST">
	<table>
		<tr>
			<td>Nim :</td>
			<td><input type="number" name="nim" length=10></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="Password" name="pass"></td>
		</tr>
	</table>
	<br><br>
	<input type="submit" name="masuk" value="masuk">&nbsp;<a href="registrasi.php"><input type="button" name="regist" value="Daftar"></a>
</form>
<?php 
	error_reporting(0);
	if(isset($_POST['masuk'])){
	session_start();	
	$nim=$_POST['nim'];
	$password=$_POST['pass'];

	$host="localhost";
	$user="root";
	$pass="";
	$db="mahasis";
	$conn=mysqli_connect($host,$user,$pass,$db);

		$sql=$conn->query("SELECT `nim`,`password` FROM `datamahasis` WHERE `nim`='$nim' AND `password`='$password'");
		$row=mysqli_fetch_array($sql);

		$sqli=$conn->query("SELECT `nama`,`nim`,`password`,`kelas`,`jenis_kelamin`,`hobi`,`fakultas`,`alamat` FROM `datamahasis` WHERE `nim`='$nim'");
		$roww=mysqli_fetch_array($sqli);

		if($nim==$row[0]&&$password==$row[1]){
			$_SESSION['nim'] = $nim;
			$_SESSION['password']= $password;
			$_SESSION['nama']=$roww[0];
			$_SESSION['kelas']=$roww[3];
			$_SESSION['jeniskelamin']=$roww[4];
			$_SESSION['hobi']=$roww[5];
			$_SESSION['fakultas']=$roww[6];
			$_SESSION['alamat']=$roww[7];
			echo "Login Berhasil"."<br>";
			echo "<a href ='halawal.php'>Klik</a> untuk lanjut";
		}else{
			echo "NIM / PASSWORD SALAH";
		}

	}
	
 ?>		
