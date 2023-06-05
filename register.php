<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_SESSION['auth']))
{
    if(!isset($_SESSION['message']))
    {
        $_SESSION['message']="Та бүртгэлтэй байна.";
    }
header("Location: index.php");
exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center ">Бүртгүүлэх</h4>
                    </div>
                    <div class="card-body ">
                        <form action="registercode.php" method="POST">
                            <div class="form-group mb-3">
                                <label>Овог нэр</label>
                                <input required type="text" name="fname" placeholder="Овог нэр оруулна уу" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Регистрийн дугаар</label>
                                <input required type="text" name="Rnumber" placeholder="Регистрийн дугаар оруулна уу" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Төрсөн он сар</label>
                                <input required  type="date" name="birthday" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                            <label >Хүйс: </label> &nbsp
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender1" id="femaleGender" value="Эмэгтэй" checked />
                            <label class="form-check-label" >Эмэгтэй</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender1" id="maleGender" value="Эрэгтэй" />
                            <label class="form-check-label" >Эрэгтэй</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender1" id="otherGender" value="Бусад" />
                            <label class="form-check-label" >Бусад</label>
                            </div>
                            <div class="form-group  mb-3">
                                <label>Гэрийн хаяг:</label>
                                <select class="form-select " aria-label="Default select example">
                                <option selected >Хот,аймаг</option>
                                <?php 
                                    $query = "SELECT * FROM city ";
                                    $query_run = $con->query($query);
                                    if ($query_run->num_rows > 0) {
                                        while($row = $query_run->fetch_assoc()) {
                                        ?>
                                        <option value="" name="sad"><?php echo $row["C_Name"]; ?> </option>
                                        <?php 
                                        }
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Утасны дугаар</label>
                                <input required type="text" placeholder="Утасны дугаар" name="ponumber" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>И-мэйл</label>
                                <input required type="email" placeholder="И-мэйл оруулна уу" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Нууц үг</label>
                                <input required type="password" placeholder="Нууц үг оруулна уу" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Нууц үг давтах</label>
                                <input required  type="password" placeholder="Нууц үг давтаж оруулна уу" name="cpassword" class="form-control">
                            </div>
                            <div class="form-group mb-3 align-items-center">
                                <button type="submit" name="register_btn" class="btn btn-primary" >Бүртгүүлэх</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>