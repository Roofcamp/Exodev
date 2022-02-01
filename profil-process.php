<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require "./Class.php";

	$newfile = new UploadedFile ($_FILES["avatar"]);
	$newfile->save();

/*
	$target = "uploads/".$_FILES["avatar"]["name"];

	if(is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
    	move_uploaded_file($_FILES["avatar"]["tmp_name"], $target);
	}
*/
?>