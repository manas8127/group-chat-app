<?php
    require_once 'C:\xampp\htdocs\Manas Web Tech Project\connection.php';
    session_start();
    if(!isset($_SESSION['username'])){

         header("location: loginform.php");
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Chat Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/chatter.css">
    <script src="chat.js"></script>
    <script type="text/javascript">
                 var timer = 0;

                    function reduceTimer() {
                        timer = timer - 1;
                        isTyping(true);
                    }

                    function isTyping(val) {
                        if (val == 'true') {
                            document.getElementById('typing_on').innerHTML = "Typing...";
                        } else {

                            if (timer <= 0) {
                                document.getElementById('typing_on').innerHTML = "No one is typing.";
                            } else {
                                setTimeout("reduceTimer();", 500);
                            }
                        }
                    }
    </script>
</head>
<body>


<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="portlet portlet-default">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h4><i class="fa fa-circle text-green"></i><?php echo ucfirst($_SESSION['username']); ?></h4>
                    </div>
                    <div class="portlet-widgets">
                        <div class="btn-group">

                                    <a href="logout.php" type="submit">LOG OUT </a>

                            <!-- <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                </li>
                                <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                </li>
                                </li>
                            </ul> -->
                        </div>
                            <!-- <div class="btn-group">
                                <button href="loginform.php" class="btn btn-primary">SIGN IN</button>
                            </div> -->
                        <span class="divider"></span>
                        <a data-toggle="collapse" data-parent="#accordion" href="#chat"><i class="fa fa-chevron-down"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel-collapse collapse in">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                            <p class="text-center text-muted small">
                                <?php
                                    echo "Today is " . date("d-m-Y") . "<br>";
                                 ?>
                            </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <h4 class="media-heading">CHATBOX

                                            <span class="small pull-right"><?php $t=time(); $curTime = date("Y-m-d",$t); echo $curTime; ?></span>
                                        </h4>
                                        <p>Do not disclose any private info in this public chatroom. Cheers!</p>


                                <div class="media">
                                    <!-- FOR A USER IMAGE -->
                                    <!-- <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="http://lorempixel.com/30/30/people/1/" alt="">
                                    </a> -->
                                    <div class="media-body" id="chatlogs">

                                        <!-- <h4 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:23 PM</span>
                                        </h4>
                                        <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p> -->

                                    </div>
                                    <div id="typing_on">No one is typing.</div>


                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>
                    <div class="portlet-footer">
                        <form role="form" id="form1">
                            <div class="form-group">
                                <textarea name="msg" id="msg" type="submit" class="form-control" placeholder="Hit Enter To Send" onkeypress="isTyping('true'); timer=5;" onkeyup="isTyping('false')" required></textarea> <br>
                            </div>
                            <div class="form-group" style="text-align: center;">
                                <button onclick="submitChat()" id="send" name="send" class="btn btn-default" >SEND</button>
                                <!-- <button id="del" name="del" class="btn btn-default pull-right" onclick="myAjax()">CLEAR CHAT</button><br><br> -->
                                <!-- <audio id="audiotag1" src="fb.mp3" preload="auto"></audio>
 -->
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	   //Your custom script goes here


</script>
</body>
</html>
