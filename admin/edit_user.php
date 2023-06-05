<?php
include('authentication.php');
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Хэрэглэгчид</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item ">Хэрэглэгчид</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h4>Хэрэглэгчийн мэдээлэл өөрчлөх
            <a href="view_register.php" class="btn btn-secondary float-end">Буцах</a>
            </h4></div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users="SELECT * FROM users  WHERE id='$user_id'";
                        $city  = mysqli_query($con, "SELECT DISTINCT city FROM users"); //songogdson dropdown utgah gargaj ireh 
                        $district  = mysqli_query($con, "SELECT DISTINCT district FROM users");
                        $gender  = mysqli_query($con, "SELECT DISTINCT gender FROM users");

                        $Dcity = mysqli_query($con,"SELECT * FROM city");  //dropdown gargah heseg
                        $Ddistrict = mysqli_query($con,"SELECT * FROM district");
                        $Dgender = mysqli_query($con,"SELECT * FROM gender");
                        $users_run=mysqli_query($con,$users);
                        
                        if(mysqli_num_rows($users_run) > 0)
                        {
                            foreach($users_run as $row)
                            {
                    ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb3">
                                        <label for="">Нэр</label>
                                        <input type="text" name="fname" value="<?=$row['fname'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Регистр</label>
                                        <input type="text" name="Rnumber" value="<?=$row['Rnumber'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Төрсөн,он,сар</label>
                                        <input type="text" name="birthday" value="<?=$row['birthday'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Хүйс:</label>
                                        <select class="form-select " name="gender">

                                            <?php foreach($gender as $rows):?>
                                            <option value="<?php echo $rows['gender']; ?>"<?php if($row['gender'] == $rows['gender']) echo 'selected="selected"'; ?>><?php echo $rows['gender']; ?></option>
                                            <?php endforeach;?>

                                            <?php foreach($Dgender as $key => $cvalue){ ?>
                                            <option value="<?=$cvalue['gender'] ;?>"><?=$cvalue['gender'] ;?></option>
                                            <?php } ?>

                                        </select>
                                        </div>
                                        <div  class="col-md-3 mb3">
                                        <label for="">Хот:</label>
                                        <select class="form-select " name="city">
                                            
                                            <?php foreach($city as $rows):?>
                                            <option value="<?php echo $rows['city']; ?>"<?php if($row['city'] == $rows['city']) echo 'selected="selected"'; ?>><?php echo $rows['city']; ?></option>
                                            <?php endforeach;?>
                                        </select>
                                        </div>
                                        <div  class="col-md-3 mb3">
                                        <label for="">Дүүрэг:</label>
                                        <select class="form-select " name="district">

                                            <?php foreach($district as $rows):?>
                                            <option value="<?php echo $rows['district']; ?>"<?php if($row['district'] == $rows['district']) echo 'selected="selected"'; ?>><?php echo $rows['district']; ?></option>
                                            <?php endforeach;?>

                                            <?php foreach($Ddistrict as $key => $cvalue){ ?>
                                            <option value="<?=$cvalue['D_name'] ;?>"><?=$cvalue['D_name'] ;?></option>
                                            <?php } ?>

                                        </select>
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Гэрийн хаяг</label>
                                        <input type="text" name="address" value="<?=$row['address'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Утасны дугаар</label>
                                        <input type="text" name="ponumber" value="<?=$row['ponumber'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">И-мэйл</label>
                                        <input type="text" name="email" value="<?=$row['email'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Нууц үг</label>
                                        <input type="text" name="password"  class="form-control">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                        <button type="submit" name="update_user" class="btn btn-primary">Шинэчлэх</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }
                        }
                        
                        else
                        {
                            ?>
                            <h4>Өгөгдөл олдсонгүй</h4>
                            <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
</div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>