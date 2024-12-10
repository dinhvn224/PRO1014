<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Địa chỉ email nhận thông tin liên hệ
    $to = "tukyx77@gmail.com";
    $subject = "Liên Hệ từ $name";

    // Nội dung email
    $body = "
    <h3>Thông tin liên hệ:</h3>
    <p><b>Tên:</b> $name</p>
    <p><b>Email:</b> $email</p>
    <p><b>Số Điện Thoại:</b> $phone</p>
    <p><b>Góp Ý:</b> $message</p>
    ";

    // Header để gửi email dưới dạng HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Thêm thông tin người gửi
    $headers .= "From: $email" . "\r\n";

    // Gửi email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Gửi liên hệ thành công!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra. Vui lòng thử lại!'); window.history.back();</script>";
    }
}
?>
