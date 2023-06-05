<?php
include('authentication.php');
include('includes/header.php');

$city = mysqli_query($con,"SELECT * FROM city");
$district = mysqli_query($con,"SELECT * FROM district");
$gender = mysqli_query($con,"SELECT * FROM gender");

?>
<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h4>
                Хэрэглэгч нэмэх
                <a href="view_register.php" class="btn btn-secondary float-end">Буцах</a>
            </h4></div>
                <div class="card-body">

                    <form action="code.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb3">
                            <label for="">Нэр</label>
                            <input type="text" name="fname"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Регистр</label>
                            <input type="text" name="Rnumber"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Төрсөн,он,сар</label>
                            <input type="date" name="birthday"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Хүйс:</label>
                            <select class="form-select " name="gender">
                                <option selected >Хүйс</option>
                                <?php foreach($gender as $key => $gvalue){ ?>
                                    <option value="<?=$gvalue['gender'] ;?>"><?=$gvalue['gender'] ;?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div  class="col-md-3 mb3">
                            <label for="">Оршин суугаа хаяг:</label>
                            <select class="form-select " name="city">
                                <option selected >Хот,аймаг</option>
                                <?php foreach($city as $key => $cvalue){ ?>
                                    <option value="<?=$cvalue['C_Name'] ;?>"><?=$cvalue['C_Name'] ;?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div  class="col-md-3 mt-4">
                            <select class="form-select " name="district">
                                <option selected >Дүүрэг,сум</option>
                                <?php foreach($district  as $key => $dvalue){ ?>
                                    <option value="<?=$dvalue['D_name'] ;?>"><?=$dvalue['D_name'] ;?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div class="col-md-6 mt-4">
                            <input type="text" name="address" placeholder="Хороо,Байр,Тоот" class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Утасны дугаар</label>
                            <input type="text" name="ponumber"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">И-мэйл</label>
                            <input type="text" name="email"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Нууц үг</label>
                            <input type="text" name="password"  class="form-control">
                            </div>
                            <div class="col-md-12 mt-3">
                            <button type="submit" name="add_user" class="btn btn-primary">Бүртгэх</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>