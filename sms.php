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
$query = "SELECT * FROM health_information WHERE id='".$id."'";
$results = mysqli_query($db, $query);
while($row=mysqli_fetch_assoc($results))
{
  $H_id = $row['H_id'];
  $glucose = $row['Glucose'];
  $heart = $row['Heart Rate'];
  $bp = $row['Blood Pressure'];
  $shivering = $row['Shivering'];
  $sweating = $row['Sweating'];
  $id = $row['id'];
}
if ($glucose < 70) {
  $mobile = $phone;
  $message = "Hypoglycemia has been detected!!!";
  $encodeMessage = urlencode($message);
  $authkey = "";
  $senderId = "";
  $route = 4;
  $postdata = array(
    'authkey' => $authkey,
    'mobiles' => $mobile,
    'message' => $encodeMessage,
    'sender' => $senderId,
    'route' => $route
  );
  $url = "http://api.msg91.com/api/sendhttp.php";
  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETERNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postdata
  ));
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec($ch);
  if(curl_errno($ch))
  {
    echo 'error:' . curl_error($ch);
  }
  curl_close($ch);
}
 ?>
