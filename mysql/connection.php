<?php

$host='localhost';
$username='root';

if(!mysql_connect($host,$username) )
{
	die('Canot Connect');
}
 else
 {
	if(mysql_select_db('student'))
	
    {
	  echo 'connection succesful<br>';
	}
	else
	{ 
           die('Canot Connect<br>');
	}
 }


?>