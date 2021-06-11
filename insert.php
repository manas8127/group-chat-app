<?php
	require_once 'C:\xampp\htdocs\Manas Web Tech Project\connection.php';
	//error_reporting( error_reporting() & ~E_NOTICE );
session_start();
	$uname = $_SESSION['username'];
	$msg = nl2br($_GET['msg']);

	function mynl2br($msg): string
    {
   		return strtr($msg, array("\r\n" => '<br />', "\r" => '<br />', "\n" => '<br />'));
	}
	//print_r($msg);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO logs (username, msg, time, date) VALUES ('$uname', '$msg', CURTIME(), CURDATE())";
$affected = $conn->affected_rows;

/*if($affected ==1)
{
    echo "<audio src='fb.mp3' ></audio>";
}*/

mysqli_query($conn, $sql);

/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


	$sql = "SELECT * FROM logs ORDER BY id DESC";
	$result = $conn->query($sql);

	while ($extract =  $result->fetch_assoc()){
		echo "<span ><b>". $extract['username']. "</b></span>: <span>" . $extract['msg']."</span><br><span class='small pull-right' id='time'>". $extract['time']." " .$extract['date'] ."</span><br>" ;
	}

?>
