<?php
session_start();

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
<section >
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center ">Нэвтрэх</h4>
                </div>
                <div class="card-body ">

                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label>И-мэйл</label>
                            <input type="email" name="email" placeholder="И-мэйл оруулна уу" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Нууц үг</label>
                            <input type="password" name="password" placeholder="Нууц үг оруулна уу" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                        <input class="form-check-input" id="inputRememberEmail" type="checkbox" value="" />
                        <label class="form-check-label" for="inputRememberEmail">Нэвтрэх нэр санах</label>
                        </div>
                        <div class="form-group mb-3">
                        <a class="small" href="password.php">Нууц үгээ мартсан уу?</a>
                        </div>
                        <div class="form-group mb-3">
                        <a class="small" href="register.php">Бүртгүүлэх</a>
                        </div>
                        <div class="form-group mb-3 align-items-center">
                            <button type="submit" name="login_btn" class="btn btn-primary" >Нэвтрэх</button>
                        </div>
                    </form>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php
include('includes/footer.php');
?>