<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First name</label>
  	  <input type="text" name="firstname" value="<?php echo $username; ?>">
  	</div>
	<div class="input-group">
  	  <label>Last name</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
    <div class="input-group">
  	  <label>Email</label>
  	  <input type="phone" name="phone" value="<?php echo $phone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="confirm">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign Up</button>
  	</div>
  	<p>
  		Are You a Member? <button class="con"><b><a class="log-button" href="login.php">Login</a></b></button>
  	</p>
	<p>
  	 Go to the Home page <button class="con"><b><a class="log-button" href="home.php">Home</a></b></button>
  	</p>
  </form>
</body>
</html>
