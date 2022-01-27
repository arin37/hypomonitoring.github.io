<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
	  	<button type="submit" class="btn" name="submit">Login</button>
  	</div>
  	<p>
  	Create an account <button class="con"><b><a class="log-button" href="register.php">Sign Up</a></b></button>
  	</p>
    <p>
      Go to the Home page <button class="con"><b><a class="log-button" href="home.php">Home</a></b></button>
   </p>
	<br>
  </form>
</body>
</html>
