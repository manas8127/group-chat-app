<?php
require_once 'C:\xampp\htdocs\Manas Web Tech Project\connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CHAT BOX</title>
	<link rel="stylesheet" type="text/css" href="chat.css">
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="chat.js"></script>
</head>
<body>
<form name="form1" method="get">
	<br>
	Enter your Chat name: <input type="text" name="uname" id="uname" style="width:200px;" />
	<br/>
	Your message: <br />
	<textarea name="msg" id="msg" type=submit style= "width:200px; height: 70px"></textarea> <br>
	<button onclick="submitChat()" id="send" name="send">Send</button><br><br>
</form>
	<div id="gif" style="display: none"></div>

	<div id="chatlogs">
		LOADING CHATS PLEASE WAIT <img src="1.gif" style="height: 30px; width: 30px;">
	</div>

</body>
</html>
