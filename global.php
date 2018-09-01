<?php

$name="Deepanshu"."<br>";
echo $name;

function showname()
{    global $name;
	echo "The name of the student is".$name;
}
showname();

?>