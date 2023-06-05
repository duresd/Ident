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
            <?php include("message.php"); ?>
            <div class="card">
            <div class="card-header">
                <h4>Бүртгэлтэй эмч мэргэжилтэн
                    <a href="add_doc.php" class="btn btn-primary float-end">Эмч нэмэх</a>
                </h4></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Нэр</th>
                                <th>Регистр</th>
                                <th>Төрсөн,он,сар</th>
                                <th>Хүйс</th>
                                <th>Гэрийн хаяг</th>
                                <th>Утасны дугаар</th>
                                <th>И-мэйл</th>
                                <th>Албан тушаал</th>
                                <th>Зэрэг</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="SELECT * FROM doctor";
                            $query_run=mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $doctor)
                                {
                                ?>
                                    <tr>
                                        <td><?= $doctor['fname']; ?></td>
                                        <td><?= $doctor['Rnumber']; ?></td>
                                        <td><?= $doctor['birthday']; ?></td>
                                        <td><?= $doctor['gender']; ?></td>
                                        <td><?= $doctor['address']; ?></td>
                                        <td><?= $doctor['ponumber']; ?></td>
                                        <td><?= $doctor['email']; ?></td>
                                        <td><?= $doctor['position']; ?></td>
                                        <td><?= $doctor['degree']; ?></td>
                                        <td><a href="edit_doctor.php?id=<?=$doctor['id'];?>" class="btn btn-success">Edit</a></td>
                                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                                        
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="6">Бүртгэлтэй эмч мэргэжилтэн олдсонгүй</td>
                                </tr>
                                <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>