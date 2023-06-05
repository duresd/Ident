<?php
include('authentication.php');
include('includes/header.php');

?>


<div class="container-fluid px-4">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"><h4>Эмч нэмэх
            <a href="view_doc.php" class="btn btn-secondary float-end">Буцах</a>
            </h4></div>
                <div class="card-body">

                    <form action="code.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb3">
                            <label for="">Нэр:</label>
                            <input type="text" name="fname"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Регистр:</label>
                            <input type="text" name="Rnumber"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Хүйс:</label>
                            <select class="form-select " aria-label="Default select example">
                                <option value="1">Эрэгтэй</option>
                                <option value="2">Эмэгтэй</option>
                                <option value="3">Бусад</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Төрсөн,он,сар</label>
                            <input type="date" name="birthday"  class="form-control">
                            </div>
                            <div  class="col-md-3 mb3">
                            <label for="">Оршин суугаа хаяг:</label>
                                <select class="form-select " aria-label="Default select example">
                                <option selected >Хот,аймаг</option>
                                <?php 
                                    $query = "SELECT * FROM city ";
                                    $query_run = $con->query($query);
                                    if ($query_run->num_rows > 0) {
                                        while($row = $query_run->fetch_assoc()) {
                                        ?>
                                        <option value=""><?php echo $row["C_Name"]; ?> </option>
                                        <?php 
                                        }
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div  class="col-md-3 mt-4">
                                <select class="form-select " aria-label="Default select example">
                                <option selected >Дүүрэг,сум</option>
                                <?php 
                                    $query = "SELECT * FROM district ";
                                    $query_run = $con->query($query);
                                    if ($query_run->num_rows > 0) {
                                        while($row = $query_run->fetch_assoc()) {
                                        ?>
                                        <option value=""><?php echo $row["D_name"]; ?> </option>
                                        <?php 
                                        }
                                    } 
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Утасны дугаар:</label>
                            <input type="text" name="ponumber"  class="form-control">
                            </div>
                            <div class="col-md-3 mt-4">
                            <input type="text" name="ponumber" placeholder="Хороо,баг" class="form-control">
                            </div>
                            <div class="col-md-3 mt-4">
                            <input type="text" name="ponumber" placeholder="Байр,тоот" class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">И-мэйл:</label>
                            <input type="text" name="email"  class="form-control">
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Албан тушаал:</label>
                            <select class="form-select " aria-label="Default select example">
                                <option value=""></option>
                                
                                </select>
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Зэрэг:</label>
                            <select class="form-select " aria-label="Default select example">
                                <option value="1">Доктор</option>
                                <option value="2">Магистр</option>
                                <option value="3">Бакалавр</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb3">
                            <label for="">Нууц үг:</label>
                            <input type="text" name="password"  class="form-control">
                            </div>
                            <div class="col-md-12 mt-3 ">
                            <button type="submit" name="add_doctor" class="btn btn-primary">Бүртгэх</button>
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