<?php
$db=new PDO('mysql:host=localhost;dbname=projectoss','root','');
if($db)
{
	echo "";
}
else
{
	echo "not connected";
}
?>
