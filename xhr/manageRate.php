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
        'from_where' => $fromWhere,
        'from_amount' =>$fromAmount,     
        'to_where' => $toWhere,
        'to_amount' =>$toAmount,     
        'reserve' => $reserve,      
    ];
   
        $create = $crud->Create($data,"rate_management");

        if($create) {
            $data["successMessage"]="Data uploaded successfully.";
        } else {
            $data["errorMessage"]="Error uploading Data.";
        }      
    
    echo json_encode($data);
    exit();
}
?>


