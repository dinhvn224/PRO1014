<div class="container-fluid">
    <div id="sec-1" class="container-fluid mt-5">
        <div class="container-fluid mt-5">
            <div class="row d-flex justify-content-center">
                <div id="main" class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide mt-4">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://shop.daisycomms.co.uk/wp-content/uploads/2023/09/Apple-iPhone-15-promo-banner-buy-now-scaled.jpg" style="height: 25rem" class="d-block w-100 img-slider" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.ytimg.com/vi/u021wNehcP4/maxresdefault.jpg" style="height: 25rem" class="d-block w-100 img-slider" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://media.binglee.com.au/a/7/a/f/a7af92b376ef365bc110ef090feb7c58a4d0545b_Apple_MU773ZPA_Mobile_Phone_Banner_1.jpg" style="height: 25rem" class="d-block w-100 img-slider" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div id="container d-flex">
                        <div class="main-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sec-1" class="container-fluid mt-5">
        <h2>Tất cả sản phẩm</h2>
        <div id="sec-1-content" class="container-fluid">
            <div class="row">
            <?php
                foreach ($hang_hoa as $san_pham) {
                            
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 my-2">
                    <a href="./index.php?ma_hang_hoa=<?= $san_pham['ma_hang_hoa']; ?>&ma_loai=<?= $san_pham['ma_loai']; ?>" class="card-title link-underline-opacity-0 link-underline">
                        <div class="card">
                            <img style="height: 15rem;" src="public/asset/<?=$san_pham['hinh']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class=""><?=$san_pham['ten_hang_hoa']?></h5>
                                <p class="card-text">Ram Rom </p>
  
                                <del ><?=$san_pham['don_gia']?></del>
                                <p class="fs-5 text-danger fw-bold"><?=$san_pham['don_gia'] ?> Vnđ</p>
                                <a href="./index.php?ma_hang_hoa=<?= $san_pham['ma_hang_hoa']; ?>&ma_loai=<?= $san_pham['ma_loai']; ?>" class="btn btn-outline-danger mt-1">Xem chi tiết</a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
</body>


</html>