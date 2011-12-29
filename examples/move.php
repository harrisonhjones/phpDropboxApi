<?php
require "../Dropbox.php";

$db = new Dropbox('username', 'password');

try
{
	$mv = $db->move(array('/fromFOLDER/fromFILE','/fromFOLDER2/fromFILE2'),'/toFOLDER');//
	echo "File moved";
}
catch (Exception $e)
{
	echo 'File move exception: ' .  $e->getMessage() . "<BR/>";
}
?>