<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="align-items-center d-none d-md-flex">
    <i class="bi bi-clock"></i> Ажлын цаг : Даваа - Бямба - 09.00-21.00
    </div>
    <div class="d-flex align-items-center">
    <i class="bi bi-phone"></i> Утас: +976 7733 4009
    </div>
</div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
<div class="container d-flex align-items-center">

    <a href="index.php" class="logo me-auto">IDENT </a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

    <nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto " href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">Бидний тухай</a></li>
        <li><a class="nav-link scrollto" href="#services">Үйлчилгээ</a></li>
        <li><a class="nav-link scrollto" href="#departments">Зөвлөгөө мэдээлэл</a></li>
        <li><a class="nav-link scrollto" href="#doctors">Эмч мэргэжилтэн</a></li>
        <li><a class="nav-link scrollto" href="#contact">Холбоо барих</a></li>
        <?php if(isset($_SESSION['auth_user'])) : ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['auth_user']['user_name']; ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Фрофайл</a></li>
                    <li>
                        <form action="allcode.php" method="POST">
                        <button type="submit" name="logout_btn" class="dropdown-item">Гарах</button>
                        </form>
                    </li>
                </ul>
            </li>
            <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Нэвтрэх</a>
                    </li>
            <?php endif ; ?>
            
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Цаг </span>Захиалах</a>

</div>
</header><!-- End Header -->