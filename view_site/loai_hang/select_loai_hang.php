
<section class="mymaincontent my-3">
    <div class="container">
        <img src="https://media.binglee.com.au/a/7/a/f/a7af92b376ef365bc110ef090feb7c58a4d0545b_Apple_MU773ZPA_Mobile_Phone_Banner_1.jpg" style="height: 25rem" class="d-block w-100 img-slider my-3" alt="...">
        <div class="container my-2 pa 3 ">
            <div class="product-list mb-3 container">
                <div class="product_title border-bottom">
                    <h2 class="fs-bold ">Sản phẩm <?php echo $loai_select_by_id['ten_loai']; ?></h2>
                </div>
                <!-- <div class="row">
                    <form action="" method="post" class='container d-flex '>
                        <div class="dropdown my-auto mx-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ram
                            </button>
                            <ul class="dropdown-menu p-3">
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            8 GB
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            16 GB
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            32 GB
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown my-auto mx-2">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dung lượng bộ nhớ
                            </button>
                            <ul class="dropdown-menu p-3">
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            256 GB
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            512 GB
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check dropdown-item">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            1 TB
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        
                         <div class="my-auto m-3 col-3">
                         <label for="priceRangeSlider">Khoảng giá</label>
                         <div id="priceRangeSlider" class="my-2"></div>
                         <p id="priceRange">$0 - $1000</p>
                        </div>
                   
                        <div class="my-auto m-3">
                            <input type="submit" class="btn btn-success d-block" value="Tìm kiếm">
                        </div>
                    </form>

                </div> -->
                <div class="product-list-s my-3">
                    <div class="row container">
                        <?php
                        foreach ($hang_hoa_by_loai as $san_pham) {

                        ?>
                            <div class="col-xl-3 col-md-4 mb-3 ">
                                <a class="card-title link-underline-opacity-0 link-underline" href="./index.php?ma_hang_hoa=<?= $san_pham['ma_hang_hoa']; ?>&ma_loai=<?= $san_pham['ma_loai']; ?>">

                                    <div class="card">
                                        <img style="height: 15rem;" src="public/asset/<?= $san_pham['hinh'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class=""><?= $san_pham['ten_hang_hoa'] ?></h5>
                                            <p class="card-text">Ram Rom </p>
                                            <span class="badge text-bg-warning">Đã bán: <?= $san_pham['da_ban'] ?></span>
                                            <del><?= $san_pham['don_gia'] ?> đ</del>
                                            <p class="fs-5 text-danger fw-bold"><?= $san_pham['don_gia'] ?>đ</p>

                                            <a href="./index.php?ma_hang_hoa=<?= $san_pham['ma_hang_hoa']; ?>&ma_loai=<?= $san_pham['ma_loai']; ?>" class="btn btn-outline-danger mt-1">Chi tiết sản phẩm</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $( function() {
        var priceRangeSlider = $( "#priceRangeSlider" ).slider({
            range: true,
            min: 1000000,
            max: 50000000,
            values: [ 0, 1000 ],
            slide: function( event, ui ) {
                $( "#priceRange" ).text( "" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#priceRange" ).text( "" + priceRangeSlider.slider( "values", 0 ) +
            " - " + priceRangeSlider.slider( "values", 1 ) );
    } );
</script>