<?php
require "../Dropbox.php";

$db = new Dropbox('username', 'password');

try
{
	$cpy = $db->copy(array('/fromFOLDER/fromFILE','/fromFOLDER2/fromFILE2'),'/toFOLDER');//
	echo "File copied";
}
catch (Exception $e)
{
	echo 'File copy exception: ' .  $e->getMessage() . "<BR/>";
}
?>