<?php 
	session_start();
	session_destroy();

	echo "<script>alert('You have logged out.');
		window.location.replace('http://localhost:8080/chatterbox/loginform.php');
	</script>"

 ?>