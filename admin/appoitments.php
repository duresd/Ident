<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid px-4">
    <h4 class="mt-4">Цаг</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item ">Дэлгэрэнгүй</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include("message.php"); ?>
            <div class="card">
            <div class="card-header">
                <h4>Захиалагдсан цаг
                    <a href="add_doc.php" class="btn btn-primary float-end">Эмч нэмэх</a>
                </h4></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Нэр</th>
                                <th>Өдөр</th>
                                <th>Цаг</th>
                                <th>Эмчилгээний төрөл</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="SELECT * FROM appoitment";
                            $query_run=mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $appoitment)
                                {
                                ?>
                                    <tr>
                                        <td><?= $appoitment['app_id']; ?></td>
                                        <td><?= $appoitment['app_date']; ?></td>
                                        <td><?= $appoitment['time']; ?></td>
                                        <td><?= $appoitment['trtype_fk']; ?></td>
                                        <td><a href="#" class="btn btn-success">Edit</a></td>
                                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                                        
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="6">Захиалсан цаг олдсонгүй</td>
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