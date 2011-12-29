<?php
require "../Dropbox.php";

$db = new Dropbox('username', 'password');

try
{
	$mv = $db->create('folderName','/path/to/root/folder');// 
	echo "Folder created";
}
catch (Exception $e)
{
	echo 'Folder creation failed: ' .  $e->getMessage() . "<BR/>";
}
?>