<?php
session_start();

include '../admin/classes/Crud.php';

ini_set('display_errors', 1);


$crud = new Crud();

date_default_timezone_set('Asia/Kolkata');
	$connection = new DbConfig();
	$con = $connection -> connect();
	$email=$_POST['email'];
	$password=$_POST['password'];

	$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

	$hash = hash('sha512', $password . $salt);

	$stmt=$con->prepare("SELECT * FROM `users` WHERE `email`='$email'  AND `password`='$hash'");

	$stmt->execute();
	$row = $stmt -> fetch(PDO:: FETCH_ASSOC);

	if($stmt->rowCount()==1)
	{	
	
			$_SESSION['this_user_id'] = $row['id'];
	        $_SESSION['user_email']=$email;
            $_SESSION['username']=$row['name'];

            $data["successMessage"]="Login Successfull";			
		
	}
	else
	{
        $data["errorMessage"]="email or password not matched";

	}

    echo json_encode($data);
    exit;

?>
