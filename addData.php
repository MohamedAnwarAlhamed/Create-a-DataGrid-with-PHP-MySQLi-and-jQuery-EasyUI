<?php
include"dbcon.php"; 
$response = array( 
    'status' => 0, 
    'msg' => 'Some problems occurred, please try again.'
); 
if(!empty($_REQUEST['first_name']) && !empty($_REQUEST['last_name']) && !empty( $_REQUEST['email']) && !empty($_REQUEST['phone'])){ 
    $first_name = $_REQUEST['first_name']; 
    $last_name = $_REQUEST['last_name']; 
    $email = $_REQUEST['email']; 
    $phone = $_REQUEST['phone'];
  
    $sql = "INSERT INTO tbl_users(first_name,last_name,email,phone) VALUES ('$first_name','$last_name','$email','$phone')"; 
    $insert = $conn->query($sql); 
  
 if($insert){ 
        $response['status'] = 1; 
        $response['msg'] = 'User data has been added successfully!'; 
    } 
}else{ 
    $response['msg'] = 'Please fill all the mandatory fields.'; 
}
echo json_encode($response); 
?>