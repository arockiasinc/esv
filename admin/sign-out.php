<?php
require_once 'classes/access.php';
$_access=new Access();
$check=$_access->signOut();
if($check==1){
	header('Location:index.php?msg=success');
}
elseif($check==0){
	header('Location:index.php?msg=auth');
}
else{
	header('Location:index.php?msg=');
}

?>