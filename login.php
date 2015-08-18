<?php
	$str = $_POST['Password'];
	$trimmed = trim($str);
	$Hash_input = sha1($trimmed);

	$file_place = "logon_password.txt";
	$FileHash;

	$file_password = fopen($file_place, "r");
	while (!feof($file_password))
	{
    	$FileHash = fgets($file_password, 1024);
    }
    fclose($file_password);

    $TrimmedFileHash = trim($FileHash);

	if($Hash_input == $TrimmedFileHash) {
		header('Location: http://mysite/Portfolio/all_files/portfolio/start_page.php');
		break;
	}

	else{
		header('Location: http://mysite/Portfolio/all_files/portfolio/projects/password/wrong_password.html');
		break;
	}
?>