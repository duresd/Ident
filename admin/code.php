<?php
include('authentication.php');

if(isset($_POST['add_user']))
{
    $fname=$_POST['fname'];
    $Rnumber=$_POST['Rnumber'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $address=$_POST['address'];
    $ponumber=$_POST['ponumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query = "INSERT INTO users (fname,Rnumber,birthday,gender,city,district,address,ponumber,email,password) VALUES ('$fname','$Rnumber','$birthday','$gender','$city','$district','$address','$ponumber','$email','$password')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Хэрэглэгч нэмэгдлээ";
        header("Location: view_register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Алдаа гарлаа";
        header("Location: view_register.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
$user_id=$_POST['user_id'];
$fname=$_POST['fname'];
$Rnumber=$_POST['Rnumber'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$district=$_POST['district'];
$address=$_POST['address'];
$ponumber=$_POST['ponumber'];
$email=$_POST['email'];
$password=$_POST['password'];

$query = "UPDATE users SET fname='$fname', Rnumber='$Rnumber', birthday='$birthday', gender='$gender', address='$address', ponumber='$ponumber', email='$email', password='$password' 
            WHERE id='$user_id' ";
$query_run = mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['message']="Мэдээлэл амжилттай өөрчлөгдлөө.";
    header("Location: view_register.php");
    exit(0);
}
}

if(isset($_POST['user_delete']))
{
    $user_id=$_POST['user_delete'];
    $query="DELETE FROM users WHERE id='$user_id' ";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Хэрэлэгчийн мэдээлэл устгагдлаа.";
        header("Location: view_register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Устгахад алдаа гарлаа.";
        header("Location: view_register.php");
        exit(0);
    }
}

if(isset($_POST['add_doctor']))
{
    $fname=$_POST['fname'];
    $Rnumber=$_POST['Rnumber'];
    $birthday=date('Y-m-d',strtotime($_POST['birthday']));
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $ponumber=$_POST['ponumber'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $degree=$_POST['degree'];
    $experience=$_POST['experience'];
    $password=$_POST['password'];
    $status=$_POST['status'] == true ? '1' : '0';
    $query = "INSERT INTO doctor (fname,Rnumber,birthday,gender,address,ponumber,email,position,degree,experience,password,status) VALUES ('$fname','$Rnumber','$birthday','$gender','$address','$ponumber','$email','$position','$degree','$experience','$password','$status')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message']="Эмч нэмэгдлээ";
        header("Location: view_doc.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Алдаа гарлаа";
        header("Location: view_doc.php");
        exit(0);
    }
}

if(isset($_POST['update_doctor']))
{
$user_id=$_POST['doctor_id'];
$fname=$_POST['fname'];
$Rnumber=$_POST['Rnumber'];
$birthday=$_POST['birthday'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$ponumber=$_POST['ponumber'];
$email=$_POST['email'];
$position=$_POST['position'];
$degree=$_POST['degree'];
$experience=$_POST['experience'];
$password=$_POST['password'];
$status=$_POST['status'] == true ? '1' : '0';

$query = "UPDATE doctor SET fname='$fname', Rnumber='$Rnumber', birthday='$birthday', gender='$gender', address='$address', ponumber='$ponumber', email='$email', position='$position',degree='$degree',experience='$experience', password='$password', status='$status' 
            WHERE id='$doctor_id' ";
$query_run = mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['message']="Мэдээлэл амжилттай өөрчлөгдлөө.";
    header("Location: view_doc.php");
    exit(0);
}
}
?>