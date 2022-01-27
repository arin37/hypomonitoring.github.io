<?php
  $db = mysqli_connect('localhost', 'root', '', 'hypoglycemia');
  $query = "SELECT * FROM session";
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
    if(isset($_POST['edit_user']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        if ($password != $confirm) {
          echo "Passwords do not match";
        }
        else {
        	$password = ($password);//encrypt the password before saving in the database

          $query = "UPDATE users set firstname = '".$firstname."', lastname = '".$lastname."', phone = '".$phone."', email = '".$email."', password = '".$password."' where id='".$id."'";
          $result = mysqli_query($db,$query);
          $query_i = "UPDATE session set firstname = '".$firstname."', lastname = '".$lastname."', phone = '".$phone."', email = '".$email."', password = '".$password."' where id='".$id."'";
          $results = mysqli_query($db,$query_i);
          if($result)
          {
              header("location:profile.php");
          }
          else
          {
              echo ' Please Check Your Query ';
          }
        }
    }
    else
    {
        header("location:profile.php");
    }
?>
