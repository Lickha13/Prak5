<?php  
if (empty($_POST['nama']['email'])) {
	header("Location:datakosong.php");
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
echo "Waktu Saat Login : ". date ("g A D d/m/Y");
}
?>