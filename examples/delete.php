<?phprequire "../Dropbox.php";$db = new Dropbox('username', 'password');try{	$del = $db->delete(array('/FOLDER/FILE','/FOLDER2/FILE2'));	echo "File deleted";}catch (Exception $e){	echo 'File delete exception: ' .  $e->getMessage() . "<BR/>";}?>