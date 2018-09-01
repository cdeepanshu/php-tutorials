<?php

if(isset($_GET["name"]) &&isset($_GET["age"]) &&isset($_GET["weight"]))
{
	$name=$_GET["name"];
	$age=$_GET["age"];
	$weight=$_GET["weight"];
	
	if(!empty($name)&&!empty($age)&&!empty($weight))
	{
		echo "<b>NAME:</b>".$_GET["name"]."<br>";
		echo "<b>AGE:</b>".$_GET["age"]."<br>";
		echo "<b>WEIGHT:</b>".$_GET["weight"]."<br>";
	}
	else
	{
		echo "Fill THE REQUIRED FIELDS";
	}
}




?>
