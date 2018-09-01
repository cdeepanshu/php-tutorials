<?php 


function add($num1,$num2)
{
	$result=$num1+$num2;
	return $result;
}

$add1=add(500,896);
echo $add1.'<br>';

$add2=add(750,963);
echo $add2.'<br>';

echo $add1*$add2;

?>