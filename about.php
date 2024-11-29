<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu - Thế Giới Apple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    header {
        background: url('apple-banner.jpg') no-repeat center center;
        background-size: cover;
        position: relative;
        overflow: hidden;
    }

    header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    header .logo {
        width: 100px;
        animation: fadeIn 2s ease-in-out;
    }

    header h1 {
        font-size: 2.5rem;
        color: #fff;
        animation: fadeInDown 1.5s ease-in-out;
    }

    header p {
        color: #ccc;
        animation: fadeInUp 2s ease-in-out;
    }

    .about-section h2 {
        font-size: 2rem;
        color: #222;
        margin-bottom: 1.5rem;
    }

    .about-section p.lead {
        color: #555;
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
        color: #007bff;
    }

    .icon {
        font-size: 3rem;
        color: #007bff;
        animation: bounce 1.5s infinite;
    }

    footer {
        background-color: #222;
        color: #ddd;
        padding: 20px 0;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes fadeInDown {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-15px); }
        60% { transform: translateY(-7px); }
    }
</style>
<body>
    <?php include_once "view_site/layout/header/index.php" ?>
    <?php include_once "view_site/layout/header/menu.php" ?>
    
    <!-- Phần Header -->
    <header class="bg-dark text-white text-center py-5">
        <img src="public/asset/logo.jpg" alt="Thế Giới Apple Logo" class="logo">
        <h1 class="mt-3">Chào Mừng Đến Với S-Tech</h1>
        <p>Nhà Cung Cấp Điện Thoại Đáng Tin Cậy</p>
    </header>

    <!-- Phần Giới Thiệu -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="mb-4">Về Chúng Tôi</h2>
                    <p class="lead">
                    S-Tech là trang web chuyên cung cấp các dòng điện thoại di động hiện đại, chất lượng cao từ các thương hiệu hàng đầu. Với giao diện thân thiện, dễ sử dụng, S-Tech giúp khách hàng dễ dàng lựa chọn sản phẩm phù hợp với nhu cầu, từ mẫu mã, màu sắc đến dung lượng lưu trữ. Chúng tôi cam kết mang đến trải nghiệm mua sắm tiện lợi, giá cả cạnh tranh và dịch vụ hỗ trợ tận tình, giúp bạn sở hữu chiếc điện thoại mơ ước một cách nhanh chóng và an tâm nhất.
                    </p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <i class="bi bi-phone-fill icon"></i>
                            <h5 class="card-title mt-3">Iphone</h5>
                            <p class="card-text">Khám phá các dòng iPhone mới nhất với công nghệ tiên tiến, thiết kế tinh tế và hiệu suất vượt trội.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <i class="bi bi-laptop-fill icon"></i>
                            <h5 class="card-title mt-3">Samsung</h5>
                            <p class="card-text">Tìm hiểu về các dòng điện thoại Samsung mạnh mẽ, kết hợp giữa hiệu năng, tính di động và sự tinh tế.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body">
                            <i class="bi bi-watch icon"></i>
                            <h5 class="card-title mt-3">Oppo</h5>
                            <p class="card-text">Luôn kết nối và chăm sóc sức khỏe với các dòng Oppo mới nhất, có tính năng theo dõi sức khỏe tiên tiến và thiết kế thời trang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần Footer -->
    <?php include_once "view_site/layout/footer/index.php" ?>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
