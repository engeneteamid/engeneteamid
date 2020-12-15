<?php
	session_start();

	$username = $_POST ['username'];
	$password = $_POST ['password']; 
	//$status = $_POST['status'];
	$koneksi = new mysqli ("localhost", "root", "","massvoting");

	$sql = "SELECT * FROM password WHERE username = '$username'and password = '$password'";
	
	$quser = $koneksi ->query($sql);
	$rowuser = $quser->fetch_assoc();
	

	if ($rowuser['password'] == "votingenhypen301120"){
		//(!empty($rowuser)) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "engene";

		header ("location:../index.php");

	} 

	else {
		echo "Hayo bukan engene ya?? <br>
		<a href= '../login.php'> Kembali Ke Login </a>";


	}


	

?>