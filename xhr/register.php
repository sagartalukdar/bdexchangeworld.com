<?php 
   session_start();

   include '../admin/classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");

if(isset($_POST['email'])){

    extract($_POST);

    $readUser=$crud->Read("users","email='$email'");
    if($readUser){
        $data["errorMessage"]="this email is already registered , please login.";
        echo json_encode($data);
        exit;
    }
	$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

	$hash = hash('sha512', $password . $salt);

        $data = [
            'name' =>$name,
            'email' =>$email,
            'phone' =>$phone,
            'password' =>$hash,
            'address' =>$address,
            'date' =>$today,            
        ];
        $create = $crud->Create($data,"users");

        if($create) {
            $data["successMessage"]="Registration Complete";

             $_SESSION['user_email']=$email;
             $_SESSION['username']=$name;
        }else {
            $data["errorMessage"]="Error adding data";
        }

    echo json_encode($data);
    exit();
}
?>