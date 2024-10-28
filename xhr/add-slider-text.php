<?php 
session_start();
if (empty($_SESSION['this_admin_id'])) {
   header('location: ../admin/adminLogin.php');
   exit();
} else {
   include '../admin/classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
}

if(isset($_POST['ajax'])){

    extract($_POST);

    $data = [
        'text1' => $text1,
        'text2' =>$text2,       
    ];
   
        $create = $crud->Create($data,"slider_marque");

        if($create) {
            $data["successMessage"]="Data uploaded successfully.";
        } else {
            $data["errorMessage"]="Error uploading Data.";
        }      
    
    echo json_encode($data);
    exit();
}
?>


