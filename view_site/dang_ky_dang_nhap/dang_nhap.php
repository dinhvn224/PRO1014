

<body>
    <div id="" class="container-fluid " style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto" >
        <div class="d-grid align-items-center justify-content-center" >
            <div class="row align-items-center" style="background-color: white; width:100%; margin-top: 15vh;margin-bottom: 20vh;height:auto; border-radius: 20px;">
            <form class="col-lg-12 col-md-5 col-sm-10 p-5 needs-validation" action="dang_ky_dang_nhap.php" class="was-validated" method="POST">
                <h1>Đăng nhập</h1>
                <div class="form-group">
                    <h5>Tài khoản</h5>
                    <input type="text" name="email_dang_nhap" id="validationCustom01" class="form-control my-2" placeholder="Vui lòng nhập tài khoản" required>
                    
                    <h5>Mật khẩu</h5>
                    
                    <input type="password" name="mat_khau_dang_nhap" id="" class="form-control my-2" placeholder="Vui lòng nhập mật khẩu" required>
                    <a href="dang_ky_dang_nhap.php?forgot=1" class="my-2">Quên mật khẩu ?</a>
                </div>
                <button type="submit" class="btn btn-danger my-3" name="action" value="dang_nhap">Đăng nhập</button>
                <p>Bạn chưa có tài khoản ? <a type="button" href="dang_ky_dang_nhap.php?action2=dang_ky" class="btn btn-primary" name="action" value="dang_ky">Đăng ký ngay</a></p>
            </form>
           
            </div>
        </div>
    </div>

</body>


</html>