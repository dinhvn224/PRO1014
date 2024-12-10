
<section class="mymaincontent my-3">
    <div class="container">
        <div class="container my-2 pa 3 ">
            <div class="product-list mb-3 container">
                <div class="product_title border-bottom">
                    <h2 class="fs-bold ">Sản phẩm có liên quan đến tìm kiếm  "<?php echo $search; ?>"</h2>
                </div>
              
                <div class="product-list-s my-3">
                    <div class="row container">
                        <?php
                        foreach ($hang_hoa as $san_pham) {

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
                                            <p class="fs-5 text-danger fw-bold" id="number"><?= $san_pham['don_gia'] ?>đ</p>

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
    const numberElement = document.getElementById("number");
        const rawNumber = parseInt(numberElement.textContent);

        // Định dạng số
        const formattedNumber = rawNumber.toLocaleString('vi-VN'); // Định dạng cho tiếng Việt

        // Cập nhật nội dung
        numberElement.textContent = formattedNumber + " Vnđ";
</script>