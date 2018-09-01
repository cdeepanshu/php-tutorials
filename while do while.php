<?php
$count=1;
echo "<b> <u>WHILE LOOP </u></b><br>";
while($count<=10)
{
	echo "HELLO"."$count<br>";
	$count++;
}

echo "<b> <u> DO WHILE LOOP </u></b><br>";

do{
	echo "HELLO"."$count<br>";
	$count++;
}while($count<=10);	


echo "<b> <u> FOR LOOP </u></b><br>";

for($r=0;$r<=10;$r++)
{
	echo "HELLO"."$r<br>";

}
	


?>