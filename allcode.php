<?php
session_start();

if(isset($_POST['logout_btn']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
    
    $_SESSION['message']="Системээс гарлаа";
    header("Location: login.php");
    exit(0);
}

?>