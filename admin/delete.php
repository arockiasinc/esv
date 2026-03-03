<?php
include_once 'classes/admin.php';
$_admin=new Admin();
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data=array('id'=>$id);
    $result=$_admin->delete($data);
    if($result==1){
        header('Location:subscribers.php?msg=success');
    }
    else{
        header('Location:subscribers.php?msg=failed');
    }
}
else{
    header('Location:subscribers.php?msg=auth');
}

?>
