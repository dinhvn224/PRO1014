<section class="my_menu bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg bg-body-danger col-md-8">
                    <div class="container-fluid">
                        <a class="navbar-brand d-none" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link text-white active" aria-current="page" href="index.php">Trang
                                        chủ</a>
                                </li>
                                <?php
                                if(isset($loai_hang)){
                                foreach ($loai_hang as $key => $value) {
                                    ?>
                                    <li class="nav-item">
                                    <a class="nav-link  text-white active" aria-current="page" href="index.php?ma_loai=<?php echo $value['ma_loai']; ?>"><?php echo $value['ten_loai']; ?></a>
                                </li>
                                    <?php
                                }
                            }
                                ?>                               
                                <li class="nav-item">
                                    <a class="nav-link  text-white active" aria-current="page" href="about.php">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-white active" aria-current="page" href="#">Liên hệ</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>