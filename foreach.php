<?php

echo " <b> <u>Single dimension Array <br></b></u>";

$names=array('Deepanshu','Rohit','Payal','Himanshu','Atul');

foreach($names as $n)
{
	echo $n. '<br>' ;
}


$student=array(array('Deepanshu',502,85),array('Mohit',875,79),array('Rohit',13,96));

echo " <b> <u>Multi dimension Array <br></b></u>";


foreach($student as $s=>$i)
{
	echo $s."<br>";
	
	foreach($i as $loop)
	{
		echo $loop."<br>";
	}
}	

?>