<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
		
		
echo "<script>alert('$sessionIdentifier');</script>";
		
		$myfile = fopen("CSRF_Token.txt", "r") or die("Can't open the file!");
		list($tok,$sessionid) = explode(",",chop(fgets($myfile)),2);
		fclose($myfile);
		if($tok == $token){
			if($sessionIdentifier == $sessionid ){
		return true;
			}
		}
		
	}
	
	


}
?>