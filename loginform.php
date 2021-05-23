<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>LOGIN HERE</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">SIGN UP</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form name="form2" action="login.php" method="post">
      <input type="text" placeholder="Username" name="username" required />
      <input type="password" placeholder="Password" name="password" required/>
      <button name="submit" value="Login">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form name="form3" action="register.php" method="post">
      <input type="text" placeholder="Username" name="user" required/>
      <input type="password" placeholder="Password" name="pass" required/>
      <input type="password" placeholder="Confirm Password" name="confirm_p" required/>
      <button name="done">Register</button>
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
