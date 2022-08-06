<?php 
    require 'check_user.php';
    require 'header.php';
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1">
                <img class="img-fluid" src="img/carousel-4.jpg" alt="Image">
            </button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                <img class="img-fluid" src="img/electronic car.jpg" alt="Image">
            </button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                <img class="img-fluid" src="img/MacOS Montery.jpg" alt="Image">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">ສິນຄ້າຍອດຫິດ
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/electronic car.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">
                        </h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/MacOS Montery.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-4 animated zoomIn"></h4>
                        <h1 class="display-1 text-white mb-0 animated zoomIn">
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->

<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">ສິນຄ້າໄອທີ</h6>
            <h1 class="display-6 mb-4">ສິນຄ້າທັງໝົດ</h1>
        </div>
        <div class="row g-4">
            <?php 
                $sql = "SELECT * FROM products";
                $rs = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($rs)){ ?>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="about.php?id=<?php echo $row['pro_id'] ?>">
                    <img class="img-fluid rounded mb-4" src="img/<?php echo $row['pro_img'] ?>" alt="">
                    <h2 name="price" class="mb-0">ລາຄາ <?php echo $row['pro_price']?> ກີບ</h2>
                    <h5 class="mb-2"> ຊື່ສິນຄ້າ <?php echo $row['pro_name']?></h5>
                    <h5 class="mb-2">ຈຳນວນ <?php echo $row['pro_qty']?></h5>
                    <button class="btn btn-primary" style='font-size:20px'>ເກັບໃສ່ຕ່າກ້າ <i class=' fas fa-cart-arrow-down'></i></button>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Service End -->
<?php require 'footer.php' ?>
