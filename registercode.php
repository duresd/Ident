<?php
include('admin/config/dbcon.php');
session_start();

if(isset($_POST['register_btn']))
{
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$Rnumber=mysqli_real_escape_string($con,$_POST['Rnumber']);
$birthday=date('Y-m-d',strtotime($_POST['birthday']));
$gender=mysqli_real_escape_string($con,$_POST['gender1']);
$address=mysqli_real_escape_string($con,$_POST['sad']);
$ponumber=mysqli_real_escape_string($con,$_POST['ponumber']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

if($password==$cpassword)
{
$checkemail = "SELECT email FROM users WHERE email='$email'";
$checkemail_run = mysqli_query($con,$checkemail);

if(mysqli_num_rows($checkemail_run) > 0)
{
    $_SESSION['message']="И-мэйл хаяг бүртгэлтэй байна";
    header("Location: register.php");
    exit(0);
}
else
{
    $user_query = "INSERT INTO users (fname,Rnumber,birthday,gender,city_id,ponumber,email,password) VALUES ('$fname','$Rnumber','$birthday','$gender','$address','$ponumber','$email','$password')";
    $user_query_run = mysqli_query($con,$user_query);

    if($user_query_run)
    {
        $_SESSION['message']="Амжилттай бүртгэгдлээ";
        header("Location: login.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Оруулсан мэдээллээ шалгаад дахин оролдоно уу";
        header("Location: register.php");
        exit(0);
    }
}
}
else
{
    $_SESSION['message']="Нууц үг таарахгүй байна";
    header("Location: register.php");
    exit(0);
}
}
else
{
header("Location: register.php");
exit(0);
}
?>