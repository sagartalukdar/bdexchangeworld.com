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
        'conversation_rate' => $conversationRate,    
    ];
   
        $Update = $crud->Update("conversation_rate",$data,"`id`='1'");

        if($Update) {
            $data["successMessage"]="Data Updateed successfully.";
        } else {
            $data["errorMessage"]="Error Updating Data.";
        }      
    
    echo json_encode($data);
    exit();
}
?>


