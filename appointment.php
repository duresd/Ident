<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['make_appo'])){

  $date = date('Y-m-d',strtotime($_POST['date']));
  $time = ($_POST['time']);
  $trtype = ($_POST['trtype']);
  $insert ="INSERT INTO `appoitment`(app_date, time, trtype_fk	) VALUES('$date','$time','$trtype')";
  $query=mysqli_query($con,$insert);
  if($query)
    {
        $_SESSION['message']="Амжилттай бүртгэгдлээ";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="Оруулсан мэдээллээ шалгаад дахин оролдоно уу";
        header("Location: index.php");
        exit(0);
    }

}

?>