<?php



session_start();
$myfile = fopen("CSRF_token.txt", "w") or die("Can't open the file!");
$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
$txt = $_SESSION['token'].",";

fwrite($myfile, $txt);
$session_id = session_id();
setcookie('Assignment_1',$session_id,time()+60*60*24*365,'/');//  set One Year time for the cookie
$txt1 = $session_id."\n";
fwrite($myfile, $txt1);
fclose($myfile);

echo $_SESSION['token'];


  ?>