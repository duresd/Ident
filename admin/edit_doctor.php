<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">Эмч мэргэжилтэн</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item ">Эмч</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h4>Эмчийн мэдээлэл өөрчлөх
            <a href="view_doc.php" class="btn btn-secondary float-end">Буцах</a>
            </h4></div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $doctor_id = $_GET['id'];
                        $users="SELECT * FROM doctor WHERE id='$doctor_id'";
                        $users_run=mysqli_query($con,$users);

                        if(mysqli_num_rows($users_run) > 0)
                        {
                            foreach($users_run as $row)
                            {
                            ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="doctor_id" value="<?= $row['id']; ?>">
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
                                        <label for="">Хүйс</label>
                                        <input type="text" name="gender" value="<?=$row['gender'];?>" class="form-control">
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
                                        <label for="">Албан тушаал</label>
                                        <input type="text" name="position" value="<?=$row['position'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Зэрэг</label>
                                        <input type="text" name="degree" value="<?=$row['degree'];?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3">
                                        <label for="">Нууц үг</label>
                                        <input type="text" name="password"  class="form-control">
                                        </div>
                                        <div class="col-md-6 mb3" >
                                        <label for="">Төлөв</label>
                                        <input type="checkbox" name="status" <?=$row['status'] == '1' ? 'checked': '' ?> width="100px" height="70px"/>
                                        </div>
                                        <div class="col-md-12 mb3">
                                        <button type="submit" name="update_doctor" class="btn btn-primary">Шинэчлэх</button>
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