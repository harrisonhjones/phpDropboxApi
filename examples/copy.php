<?php
require "../Dropbox.php";

$db = new Dropbox('username', 'password');

try
{
	$cpy = $db->copy(array('/SRCFolder/File1','/SRCFolder/File2'),'/DESTFolder');//
	echo "File copied";
}
catch (Exception $e)
{
	echo 'File copy exception: ' .  $e->getMessage() . "<BR/>";
}
?>