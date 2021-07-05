<?php
    require_once('functions/function.php');
    needLogged();
    $id=$_GET['d'];
    $del="DELETE FROM cs_user WHERE user_id='$id'";
    $confirm=mysqli_query($con,$del);
    if($confirm){
        header('Location: all-user.php');
    }else{
        echo "Delete hoi nai!";
    }
?>
