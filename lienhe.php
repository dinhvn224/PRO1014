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
    .contact-form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    margin: 0 auto; /* Đặt form ở giữa */
}

.contact-form h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

.contact-form .form-group {
    margin-bottom: 15px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
    color: #555;
    font-weight: bold;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    resize: none;
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    border-color: #6200ea;
    box-shadow: 0 0 5px rgba(98, 0, 234, 0.3);
}

.contact-form button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #6200ea;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

.contact-form button:hover {
    background-color: #4b00c2;
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
    <div class="content">
    <div class="contact-form">
        <h2>Liên Hệ</h2>
        <form id="contactForm" action="send_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Tên Khách Hàng</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên của bạn" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại</label>
                <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" required>
            </div>
            <div class="form-group">
                <label for="message">Góp Ý</label>
                <textarea id="message" name="message" rows="5" placeholder="Nhập ý kiến của bạn" required></textarea>
            </div>
            <button type="submit">Gửi Liên Hệ</button>
        </form>
    </div>
</div>
    </section>
    <script>
    // Xử lý sự kiện submit
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn trình duyệt gửi form thực sự
        alert('Gửi thành công!'); // Hiển thị thông báo
        this.reset(); // Xóa dữ liệu trong form
    });
</script>

    <!-- Phần Footer -->
    <?php include_once "view_site/layout/footer/index.php" ?>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
