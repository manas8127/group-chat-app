<?php 
	session_start();
	error_reporting( error_reporting() & ~E_NOTICE );
	$uname = $_SESSION['username'];
if (isset($_GET['msg'])) {
    $msg = nl2br($_GET['msg']);
}
else
    echo "";
	//echo $msg;

	$conn = mysqli_connect('localhost', 'root', '', 'chatbox');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*$sql = "INSERT INTO logs (username, msg) VALUES ('$uname', '$msg')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


	$sql = "SELECT * FROM logs ORDER BY id DESC";
	$result = $conn->query($sql);

	while ($extract =  $result->fetch_assoc()){
echo "<span ><b>". $extract['username']. "</b></span>: <span>" . $extract['msg']."</span><br><span class='small  pull-right' id='time'>". $extract['time']." ". $extract['date']."</span><br>" ;
		//echo "<span><b>" .$extract['username']. "</b></span><span>" . $extract['msg']. "</span><br>";
	}

?>