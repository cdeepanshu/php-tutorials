<?php

require('connection.php');

$query=mysql_query('SELECT * FROM `userinfo`');
if($query)
{
    echo "QUery execueted<br>";
	while($qexecute=mysql_fetch_assoc($query))
	{
	echo'<table border="2" style=width:300px><tr><td>'.$qexecute['ID'].'</td><td>'.$qexecute['FULL NAME'].'</td><td>'.$qexecute['Course'].'</td><td>'.$qexecute['Branch'].'</td></tr></table>';
	}
}
else{
	echo"query not executed<br>";
}


?>