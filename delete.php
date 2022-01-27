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
$query = "DELETE from users where id = '".$id."'";
$result = mysqli_query($db,$query);
$query_i = "DELETE from session";
$results = mysqli_query($db,$query_i);

if($result && $results)
{
  header("location:index.php");
}
else
{
    echo ' Please Check Your Query ';
}
 ?>
