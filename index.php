<?php
session_start();
include('admin/config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');

$trtype = mysqli_query($con,"SELECT * FROM trcategory");
$user_id = mysqli_query($con,"SELECT * FROM users");
$position = mysqli_query($con,"SELECT * FROM position");

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/sda.png)">
          
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/dsa.png);">
          
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide3.jpg)">
          
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/slide4.jpg)">
          
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <?php include('message.php'); ?>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-user-md "></i></div>
              <h4 class="title"><a href="">Мэргэжлийн чадварлаг эмч нар</a></h4>
              <p class="description">Олон улсад суралцаж, мэргэжил дээшлүүлсэн чадварлаг хамт олон.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa-solid fa-microscope"></i></div>
              <h4 class="title"><a href="">Сүүлийн үеийн тоног төхөөрөмж</a></h4>
              <p class="description">Америк, Герман, Япон улсын хамгийн сүүлийн үеийн багаж, материал.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa-solid fa-thumbs-up"></i></div>
              <h4 class="title"><a href="">Танд зориулсан чанартай үйлчилгээ</a></h4>
              <p class="description">Нарийн мэргэжлийн төрөлжсөн үйлчилгээг нэг дор авах боломжтой.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa-solid fa-business-time"></i></div>
              <h4 class="title"><a href="">Цагийн менежмент</a></h4>
              <p class="description">Өөрийн боломжтой өдөр болон боломжтой цагаа сонгон манайхаар үйлчлүүлээрэй. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Шүд чинь өвдсөн үү? Яаралтай тусламж хэрэгтэй байна уу?</h3>
          <a class="cta-btn scrollto" href="#appointment">Яг одоо Цагаа захиалаарай!!</a>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Бидний тухай</h2>
          <p>Өөрийн болон өөрийн гэр бүлийн амны хөндийн эрүүл мэндэд анхаарал тавьж буй үйлчилүүлэгч танд эрүүл энхийг хүсэн ерөөе.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/identmain.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>TEXT</h3>
            <p class="fst-italic">
            IDent нь анх 2009 онд үүсгэн байгуулагдсан эрүүл мэндийн менежментийн компани юм.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Дэвшилтэд технологид суурилсан шүдний эмчилгээ.</li>
              <li><i class="bi bi-check-circle"></i> Тав тухтай цэвэр орчин.</li>
              <li><i class="bi bi-check-circle"></i> Эрүүл шүд итгэл дүүрэн амьдрал.</li>
            </ul>
            <p>
            Бид Монголчуудынхаа гадаадад очиж оношлогоо, эмчилгээ хийлгэх урсгалыг багасгаж гадны хөгжилтэй орнуудад хийгддэг мэс заслуудыг Монголдоо хийж байгаагаас гадна дэлхийн томоохон шүдний материал үйлдвэрлэгчдийн бүтээгдэхүүн, тоног төхөөрөмж ашиглаж байна.
            Үүнд: АНУ-гийн 3M, Ултрадент, ХБНГУ-ын Kerr, Япон улсын GC, БНСУ-ын Vatech, Genoray, Hallim, Nexpoint, Osstem зэрэг дэлхийд тэргүүлэгч брэндүүдийн тоног төхөөрөмж материалуудыг оношлогоо эмчилгээндээ ашиглаж байна. Мэргэжлийн өндөр түвшинд бэлтгэгдсэн олон жилийн туршлагатай эмч, сувилагч, найрсаг хамт олон нэг дор бүрдэж, хэрэглэгчдэд чанарын өндөр түвшинд дэлхийн жишигт хүрсэн эмчилгээ үйлчилгээг үзүүлэн шүдний салбарын хөгжлийг хурдасгагч байхыг зорин ажиллаж байна.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Эмч</strong> нарын баг таны эрүүл энхийн манаанд зогсож байгааг дуулгахад таатай байна. </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Салбарт</strong> та бүхэнд үйлчилгээ үзүүлж байна.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Рентген</strong> зураг болон СВСТ авч байна. </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Албан</strong> ёсны сертификат болон шагналууд.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
            <i class="bx bx-wallet"></i>
              <h4>Төлбөрийн шийдэл</h4>
              <p>Төлбөрийн нөхцөл уяан хатан болон бүх төрлийн төлбөрийн хэрэгслээр хийх боломжтой.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-been-here"></i>
              <h4>Манай үйлчилгээ</h4>
              <p>Дэлхийн стандартад нийцсэн шүдний бүх төрлийн оношлогоо эмчилгээг та нэг дороос хамгийн чанартайгаар авах боломжтой.</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-add-to-queue"></i>
              <h4>Тухтай орчин, супер тоноглол</h4>
              <p>АНУ, Герман, Япон, БНСУ зэрэг улсуудын хамгийн сүүлийн үеийн дэвшилтэд технологиор тоноглогдсон тав тухтай орчин</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-user-plus"></i>
              <h4>Манай баг</h4>
              <p>Монгол, БНСУ, Куба, ОХУ зэрэг улсуудад боловсрол эзэмшсэн олон жилийн туршлагатай нарийн мэргэжлийн эмч нар</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/feature.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Үйлчилгээ</h2>
          <p>Бид таны нүүр ам, шүдний эрүүл мэндийн үнэнч туслах байх болно.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div> -->
    <!-- </section>End Services Section -->

    

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Үзүүлж буй үйлчилгээ</h2>
          <p>Бид таны нүүр ам, шүдний эрүүл мэндийн үнэнч туслах байх болно.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Шүдний чулуу цэвэрлэгээ</h4>
                  <p>Буйл тайрах мэс ажилбар нь хэт давж ургасан буйлыг авах,буйлны үрэвсэл эмчлэх, инээмсэглэлийг өөрчлөх мэс ажилбар юм.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Имплант буюу хиймэл шүдэлбэр</h4>
                  <p>Та шүдээ авхууллаа эсвэл уначихлаа гээд онгорхой зайнаасаа болоод өөртөө итгэх итгэлээ бага багаар алдаад байгаа юм биш биз.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Хэлний хөвч уртасгах мэс засал</h4>
                  <p>Хэл, уруулын хөвч уртасгах мэс ажилбарын тухай.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Шүдний буйл тайрах мэс ажилбар</h4>
                  <p>Инээх үед буйлнаасаа ичих хэрэггүй боллоо</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Шүдний чулуу цэвэрлэгээ</h3>
                <p class="fst-italic"></p>
                <img src="assets/img/service1.jpg" alt="" class="img-fluid">
                <p>Инээх үед буйлнаасаа ичих хэрэггүй боллоо
                -Буйл тайрах мэс ажилбар нь хэт давж ургасан буйлыг авах, буйлны үрэвсэл эмчлэх, инээмсэглэлийг өөрчлөх гэх мэт гоо сайхны болон эмчилгээний зорилгоор буйлны нэмэлт эдийг авахад хэрэглэгддэг.
                Буйл тайралт 1шүдний төлбөр: 30,000₮
                СЭТГЭЛ ХАНГАЛУУН ИНЭЭМСЭГЛЭЕ
                </p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Имплант буюу хиймэл шүдэлбэр</h3>
                <p class="fst-italic"></p>
                <img src="assets/img/service2.jpg" alt="" class="img-fluid">
                <p> Тэгвэл таны насан туршийн шүдтэй дүйцэхүйц үйчилгээг санал болгоё.<br>
                  Шүдний имплант гэдэг нь унасан шүдний ёзоорыг орлон, эрүүний ясанд суулгадаг титанаар хийгдсэн, орчин үеийн авагддаггүй хиймэл шүдний тулгуур юм.<br>
                  Шүдний имплант нь таны өөрийн шүд мэт таатай мэдрэгдэж, яв цав таарч, жинхэнэ шүд мэт ашиглагддаг тул бусад төрлийн хиймэл шүдтэй харьцуулахад урт хугацаанд хамгийн тохиромжтой шийдэл болж чаддагаараа онцлогтой</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Хэлний хөвч уртасгах мэс засал</h3>
                <p class="fst-italic"></p>
                <img src="assets/img/service3.jpg" alt="" class="img-fluid">
                <p>Хэлний хөвч богино байхаас үүдэн хэлний хөдөлгөөн хязгаарлагдаж хэл ярианы буруу хөгжил үүссэн үед<br>
                  Үүдэн шүд зайтах эмгэг буюу Диастем үүссэн үед<br>
                  Дээд уруулын хөвчний гаж хөгжил<br>
                  Хэлний хөвч богино гэх мэт тохиолдолд хөвч уртасгах frenectomy мэс ажилбар хийгдэнэ.<br>
                  Хүүхэд насанд хөвч уртасгах мэс ажилбарт орсон бол үүний дараа шүд хоорондын завсар өөрөө аяндаа зүгээр болно. Харин өсвөр насны хүүхэд ба насанд хүрэгчдэд хөвч уртасгасны дараа шүдний зайг гажиг заслын авагддаг, авагддаггүй аппарат болон согог заслын аргаар нүүрэвч, бүрээс хийж шүдний гоо сайхныг дахин сэргээж зайгүй болгоно.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Шүдний буйл тайрах мэс ажилбар</h3>
                <p class="fst-italic"></p>
                <img src="assets/img/service4.jpg" alt="" class="img-fluid">
                <p>Буйл тайрах мэс ажилбар нь хэт давж ургасан буйлыг авах, буйлны үрэвсэл эмчлэх, инээмсэглэлийг өөрчлөх гэх мэт гоо сайхны болон эмчилгээний зорилгоор буйлны нэмэлт эдийг авахад хэрэглэгддэг.<br>
                  Буйл тайралт 1шүдний төлбөр: 30,000₮<br>
                  СЭТГЭЛ ХАНГАЛУУН ИНЭЭМСЭГЛЭЕ
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Үйлчлүүлэгчдийн с</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div> -->
            <!-- </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div>End testimonial item -->

            <!-- <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div>End testimonial item -->

          <!-- </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Эмч мэргэжилтэн</h2>
          <p>IDENT эмнэлгийн эмч нарын баг таны эрүүл энхийн манаанд зогсож байгааг дуулгахад таатай байна.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/blank-picture.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ц.Үнэнтөгс</h4>
                <span>Их эмч</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/blank-picture.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Б.Хонгор</h4>
                <span>Ахлах эмч</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/blank-picture.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Б.Азбилэг</h4>
                <span>Сувилагч</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/blank-picture.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Г. Халиун</h4>
                <span>Эрхлэгч</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> -->
    <!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div> -->
    <!-- </section>End Frequently Asked Questioins Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Холбоо барих</h2>
          <p>Цаг захиалга болон бусад асуудлаар холбогдохыг хүсвэл доорхи хаягуудаар холбогдоно уу.</p>
        </div>

      </div>

      

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Бидний хаяг</h3>
                  <p>3,4-р хороолол Билэг их дэлгүүрийн ард<br>13-р хороолол FM 107.5 байр</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>И-мэйл</h3>
                  <p>info@ident.com<br>ident_dental@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Холбогдох утас</h3>
                  <p>+976 7733 4009<br>+976 7722 4009</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 info-box" >
          <div class="container" data-aos="fade-up">
        <form action="appointment.php" method="POST" role="form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
          <div class="d-flex justify-content-center " >
          <h2>Цаг захиалах</h2>
          </div>
          
            <div class="col-md-6 form-group mt-3">
              <label for="">Он сар өдөр:</label>
              <input type="date" name="date" class="form-control da tepicker" id="date" >
            </div>
            <div class="col-md-6 form-group mt-3">
              <label for="">Боломжтой байгаа цаг:</label>
              <select name="time" id="doctor" class="form-select">
                <option value="11:00 - 12:00">11:00 - 12:00</option>
                <option value="13:00 - 14:00">13:00 - 14:00</option>
                <option value="16:00 - 17:00">16:00 - 17:00</option>
                <option value="18:00 - 19:00">18:00 - 19:00</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 form-group mt-3">
            <label for="">Эмчилгээний төрөл:</label>
              <select name="trtype" id="department" class="form-select">
              <?php foreach($trtype as $key => $cvalue){ ?>
                  <option value="<?=$cvalue['categ_name'] ;?>"><?=$cvalue['categ_name'] ;?></option>
              <?php } ?>
              </select>
            </div>
          <div class="text-center mt-3">
            <button type="submit" name="make_appo" class="btn btn-primary" >Цаг авах</button>
          </div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php
include('includes/footer.php');
?>