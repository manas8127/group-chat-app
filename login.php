<?php 
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];


	$conn = mysqli_connect('localhost', 'root', '', 'chatbox');
// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	//SHA-256 with a random salt 
	$saltQuery = "SELECT salt FROM users where username = '$username';";

	$output = $conn->query($saltQuery);

	$row =$output ->fetch_assoc();
	$salt = $row['salt'];

	$saltedPW =  $password . $salt;

	$hashedPW = hash('sha256', $saltedPW);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPW'";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result)){
		$res =  $result->fetch_assoc();
		$_SESSION['username'] = $res['username'];
		header("location: index.php");
		exit;
	}else{
		echo "<script>alert('Wrong Username or Password, Retry.'); window.location.replace('http://localhost:8080/chatterbox/loginform.php'); </script>";
		exit;

	}

 ?>