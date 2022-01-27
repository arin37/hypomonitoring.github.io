<?php
session_start();

// initializing variables
$id = "";
$firstname = "";
$lastname="";
$phone="";
$email    = "";
$errors = array();
$password_length = 6;
// generate a unique random token of length 100
$token = bin2hex(random_bytes(50));

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hypoglycemia');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname= mysqli_real_escape_string($db, $_POST['lastname']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm = mysqli_real_escape_string($db, $_POST['confirm']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)){ array_push($errors, "Lastname is required"); }
  if (empty($phone)){ array_push($errors, "Phone number is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirm) {
	array_push($errors, "Passwords do not match");
  }
  if ( strlen($password) < $password_length ) {
		array_push($errors, "Password must be in 6 characters");
	}

	if ( !preg_match("#[0-9]+#", $password) ) {
		array_push($errors, "Password must contain a Number");
	}

	if ( !preg_match("#[a-z]+#", $password) ) {
		array_push($errors, "Password must contain a small letter");
	}

	if ( !preg_match("#[A-Z]+#", $password) ) {
		array_push($errors, "Password must contain a capital letter");
	}

	if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password) ) {
		array_push($errors, "Password must contain a special character");
	}

  // first check the database to make sure
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  /*if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }*/
    if ($user) {
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = ($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname, lastname, phone, email, password)
  			  VALUES('$firstname','$lastname', '$phone', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}
  // LOGIN USER
if (isset($_POST['submit'])) {
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  /*if (empty($lastname)) {
  	array_push($errors, "lastname is required");
  }*/
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password =($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    	$results = mysqli_query($db, $query);
      while($row=mysqli_fetch_assoc($results))
      {
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
      }
      $query_i = "INSERT into session (id, firstname, lastname, phone, email, password) values('$id', '$firstname','$lastname', '$phone', '$email', '$password')";
      $result = mysqli_query($db,$query_i);
  	  header('location: health_status.php');
  	}else {
  		array_push($errors, "Wrong email or password");
  	}
  }
}
if (isset($_POST['Submit'])) {
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $query = "SELECT * FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) == 1) {
  /*if (empty($lastname)) {
  	array_push($errors, "lastname is required");
  }*/
    if (count($errors) == 0) {
  	   $query = "SELECT * FROM users WHERE email='$email'";
  	    $results = mysqli_query($db, $query);
  	     if (mysqli_num_rows($results) == 1) {
  	        $_SESSION['email'] = $email;
  	  //$_SESSION['success'] = "You are now logged in";
            header('location: forgot-2.php');
          }
        }
      }
      else {
        array_push($errors, "Email does not found");
      }
      //header('location: forgot-1.php');
    }
if (isset($_POST['Submit-2'])) {
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm = mysqli_real_escape_string($db, $_POST['confirm']);
  if ($password != $confirm) {
	array_push($errors, "Passwords do not match");
  }
  if ( strlen($password) < $password_length ) {
		array_push($errors, "Password must be in 6 characters");
	}

	if ( !preg_match("#[0-9]+#", $password) ) {
		array_push($errors, "Password must contain a Number");
	}

	if ( !preg_match("#[a-z]+#", $password) ) {
		array_push($errors, "Password must contain a small letter");
	}

	if ( !preg_match("#[A-Z]+#", $password) ) {
		array_push($errors, "Password must contain a capital letter");
	}

	if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password) ) {
		array_push($errors, "Password must contain a special character");
	}
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  if (empty($confirm)) {
  	array_push($errors, "Confirm password is required");
  }
  /*if (empty($lastname)) {
  	array_push($errors, "lastname is required");
  }*/
  if (count($errors) == 0) {
    $query = "UPDATE users set password = '".$password."' where email='".$_SESSION['email']."'";
    $result = mysqli_query($db,$query);
      header('location: login.php');
}
}
/*Accept email of user whose password is to be reset
  Send email to user to reset their password
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }


  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on examplesite.com";
    $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: info@examplesite.com";
    mail($to, $subject, $msg, $headers);
    header('location: pending.php?email=' . $email);
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['submit'])) {
  $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  //$token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = mysqli_query($db, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($db, $sql);
      header('location: login.php');
    }
  }
}*/

?>
