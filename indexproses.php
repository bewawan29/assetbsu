<?php
session_start();
include "koneksi.php";
?>

<?php
if(isset($_POST['proseslog'])){
	$sql=mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_POST[username]' and password = '$_POST[password]'");
//	$sql=mysqli_query($koneksi, "SELECT * FROM user WHERE username = 'eko' and password = '1111'");
	
	$cek = mysqli_num_rows($sql);
	if($cek > 0){
		$_SESSION['username'] = $_POST['username'];

  //$user="admin";
  //$pass="1234";
  
  //if(($_POST['username']==$user) || ($_POST['password']==$pass)){
  	//$_SESSION['username'] = $_POST['username'];
 
		//echo "<meta http-equiv=refres content=0;URL='home.php'>";
		if($_POST['username'] == "0"){
			// header ("location:tahun.php");
			echo "<meta http-equiv=refresh content=1;URL='listdata.php'>";
		}else{
			// header ("location:halaman.php");
			echo "<meta http-equiv=refresh content=1;URL='halaman.php'>";
		}
		
		
	} else {
        // echo "<p align=center><b> Username and Password salah ! </b></p>";
        echo "<script>alert('Username dan Password salah!');</script>";
        echo "<meta http-equiv=refresh content=2;URL='index.php'>";
    }
	
}

?>