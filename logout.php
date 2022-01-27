<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["email"]);
$db = mysqli_connect('localhost', 'root', '', 'hypoglycemia');
$query = "DELETE FROM session";
$results = mysqli_query($db, $query);
header("Location:index.php");
?>
