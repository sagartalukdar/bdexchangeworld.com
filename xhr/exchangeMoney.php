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

        $target_dir = "images/exchangeMoney/";
        $target_file1 = $target_dir . md5(time()).basename($_FILES["sendMethodImage"]["name"]);
        $target_file2 = $target_dir . md5(time()).basename($_FILES["receiveMethodImage"]["name"]);
        $uploadOk = 1;

            if (move_uploaded_file($_FILES["sendMethodImage"]["tmp_name"], "../".$target_file1) && move_uploaded_file($_FILES["receiveMethodImage"]["tmp_name"], "../".$target_file2)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'sendImage' =>$target_file1,
                    'receiveImage' => $target_file2,
                    'fromWhere'=>$fromWhere,
                    'toWhere'=>$toWhere,
                    'message'=>$message      
                ];
               
                    $create = $crud->Create($data,"exchange_money");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="error uploading data.";
            }
    
    echo json_encode($data);
    exit();
}
?>


