<?php
	require_once 'C:\xampp\htdocs\Manas Web Tech Project\connection.php';
	if(isset($_SESSION['username'])){
 		 echo "<script>alert('Password Mismatch'); window.location.replace('chatterbox/index.php');</script>";
 	}

	if(isset($_POST['done'])){


		$uname = $_POST['user'];
		$pass = $_POST['pass'];
		$pass2 = $_POST['confirm_p'];
		$salt = bin2hex(random_bytes(32));
		$saltedPW =  $pass . $salt;
		$hashedPW = hash('sha256', $saltedPW);

		if($pass != $pass2){
			echo "<script>alert('Password Mismatch'); window.location.replace('loginform.php');</script>";

		}else{
			$sql = "SELECT username FROM users WHERE username='$uname'";
			$checker = mysqli_query($conn, $sql);
			if(mysqli_num_rows($checker)){
				echo "<script>alert('User Already Exists'); window.location.replace('loginform.php');</script>";
			}else{
				mysqli_query($conn, "INSERT INTO users (username, password, salt) VALUES ('$uname', '$hashedPW', '$salt')");
				echo "<script>alert('SIGN UP SUCCESSFUL')</script>";
				//$result = $conn->query($insert);
				//mysqli_query($conn, $insert);
				echo "<script>window.location.replace('loginform.php');</script>";
			}
		}
}

 ?>
