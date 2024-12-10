<div class="container-fluid ">
<div id=""  style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto">
        <div class="d-grid align-items-center ">
            <div class="row"
                style="background-color: white; width:80%;margin-left:10%; margin-top: 10vh;margin-bottom: 15vh;height:auto; border-radius: 20px;">

                <form class="p-5" action="dang_ky_dang_nhap.php" method="POST" enctype="multipart/form-data">
                    <h1>FORM ĐẶT LẠI MẬT KHẨU</h1>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-10 p-5">
                                <h5>Mật khẩu mới</h5>
                                <input type="password" id="ho_ten" name="pass" class="form-control my-2"
                                    placeholder="Mật khẩu mới" required>
                                    <h5>Đặt lại mật khẩu mới</h5>
                                <input type="password" id="ho_ten" name="repass" class="form-control my-2"
                                    placeholder="Nhập lại mật khẩu mới" required>
                            </div>
                            <button type="submit" id="submitt" class="btn btn-primary" name="repass-btn" value="dang_ky">Đặt lại</button>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
        let check = document.getElementById('checkk');
        let btnSubmit = document.getElementById('submitt');
       
            check.addEventListener('change', function(){
                if(this.checked){
                btnSubmit.disabled = false;
                
                }else{
                    btnSubmit.disabled = true;
            }
            });
    </script>