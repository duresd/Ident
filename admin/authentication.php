<?php
session_start();
include('config/dbcon.php');

if(!isset($_SESSION['auth']))
{
$_SESSION['message']="Дашбоард руу орохын тулд нэвтрэх шаардалагтай!!";
header("Location: ../login.php");
exit(0);
}
else
{

    if($_SESSION['auth_role'] !="2")
    {
        $_SESSION['message']="Та админ эрхтэй хэрэглэгч биш байна.";
        header("Location: ../login.php");
        exit(0);
    }
}
?>