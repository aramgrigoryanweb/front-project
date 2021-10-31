<?php 
	$result =' ';
	$contactdb = new mysqli('localhost', 'root', '', 'contact_db');
	$sql = "INSERT INTO message(name_lastname , phone_number , email_address , messgae_title , messgae_text)
			VALUES('{$_POST['name_lastname']}', '{$_POST['phone_number']}' ,'{$_POST['email_address']}' , '{$_POST['messgae_title']}' ,'{$_POST['messgae_text']}')";
	$result = $contactdb -> query( $sql );
	$contactdb -> close();
	//var_dump($_POST);
	echo "  با موفقیت ارسال شد";
	


?>