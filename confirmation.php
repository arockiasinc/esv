<?php
include_once 'admin/classes/access.php';
$_admin=new Access();
//var_dump(base64_encode('arockiasinc30@gmail.com'));
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $data=array('status'=>'yes','id'=>base64_decode($id));//var_dump($data);
    $result=$_admin->update($data);
    if($result==1){
        header('Location:success.php?msg=Subscription Verified!');
    }
    else{
        header('Location:success.php?msg=Subscription Verified!');
    }
}
else{
    header('Location:success.php?msg=Subscription Verified!');
}

?>
