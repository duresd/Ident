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
            <?php include("message.php"); ?>
            <div class="card">
            <div class="card-header">
                <h4>Бүртгэлтэй хэрэглэгчид
                    <a href="add_user.php" class="btn btn-primary float-end">Хэрэглэгч нэмэх</a>
                </h4></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Нэр</th>
                                <th>Регистр</th>
                                <th>Төрсөн,он,сар</th>
                                <th>Хүйс</th>
                                <th>Хот</th>
                                <th>Дүүрэг</th>
                                <th>Гэрийн хаяг</th>
                                <th>Утасны дугаар</th>
                                <th>И-мэйл</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="SELECT * FROM users";
                            $query_run=mysqli_query($con,$query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $user)
                                {
                                ?>
                                    <tr>
                                        <td><?= $user['fname']; ?></td>
                                        <td><?= $user['Rnumber']; ?></td>
                                        <td><?= $user['birthday']; ?></td>
                                        <td><?= $user['gender']; ?></td>
                                        <td><?= $user['city']; ?></td>
                                        <td><?= $user['district']; ?></td>
                                        <td><?= $user['address']; ?></td>
                                        <td><?= $user['ponumber']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td><a href="edit_user.php?id=<?=$user['id'];?>" class="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="code.php" method="POST">
                                            <button type="submit" name="user_delete" value="<?=$user['id'];?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        
                                    </tr>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="6">Бүртгэлтэй хэрэглэгч олдсонгүй</td>
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