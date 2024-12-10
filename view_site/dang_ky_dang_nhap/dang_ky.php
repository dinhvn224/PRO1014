<div class="container-fluid ">
<div id=""  style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
 height:auto">
        <div class="d-grid align-items-center ">
            <div class="row"
                style="background-color: white; width:80%;margin-left:10%; margin-top: 10vh;margin-bottom: 15vh;height:auto; border-radius: 20px;">

                <form class="p-5" action="dang_ky_dang_nhap.php" method="POST" enctype="multipart/form-data">
                    <h1>Đăng ký</h1>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-10 p-5">
                                <h5>Họ và Tên</h5>
                                <input type="text" id="ho_ten" name="ho_ten" class="form-control my-2"
                                    placeholder="Vui lòng nhập họ tên" required>
                                <h5>Email</h5>
                                <input type="email" id="ho_ten" name="email" class="form-control my-2"
                                    placeholder="Vui lòng nhập họ tên" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-10 p-5">
                                <h5>Mật khẩu</h5>
                                <input type="password" id="mat_khau" name="mat_khau" class="form-control my-2"
                                    placeholder="Vui lòng nhập mật khẩu" minlength="4" maxlength="20" required>
                                <h5>Nhập lại mật khẩu</h5>
                                <input type="password" name="re-password" id="" class="form-control my-2"
                                    placeholder="Vui lòng nhập lại mật khẩu" minlength="4" maxlength="20" required>
                                <input type="checkbox" name="agree" id="checkk" class="my-2" > 
                                Tôi đã đọc và đồng ý với 
                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   điều khoản sử dụng
                                </a>


                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Điều khoản sử dụng</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <img class="mx-auto d-block my-3" src="public/asset/logo.png">
                                        <ul>
                                    <li><b>1.Đăng ký tài khoản:</b> Người dùng phải cung cấp thông tin chính xác và đầy đủ khi đăng ký tài khoản. Tài khoản chỉ được sử dụng cho mục đích cá nhân và không được chia sẻ cho bất kỳ ai khác.</li>
                                    <li><b>2.Bảo mật tài khoản:</b> Người dùng phải giữ bảo mật thông tin đăng nhập của mình và không được chia sẻ với bất kỳ ai khác. Người dùng phải chịu trách nhiệm về các hoạt động được thực hiện trên tài khoản của mình.</li>
                                    <li><b>3.Sản phẩm và giá cả:</b> Trang web cung cấp các sản phẩm của Apple với giá cả được niêm yết rõ ràng. Giá cả có thể thay đổi tùy thuộc vào từng sản phẩm và thời điểm.</li>
                                    <li><b>4.Thanh toán và vận chuyển:</b> Người dùng phải thanh toán đầy đủ giá cả và các phí vận chuyển khi đặt hàng. Trang web sẽ cung cấp thông tin chi tiết về các phương thức thanh toán và chính sách vận chuyển.</li>
                                    <li><b>5.Bảo hành và đổi trả:</b> Các sản phẩm được bảo hành theo chính sách của Apple. Người dùng có thể yêu cầu đổi trả sản phẩm trong vòng 30 ngày kể từ ngày mua hàng.</li>
                                    <li><b>6.Chính sách bảo mật:</b> Trang web cam kết bảo vệ thông tin cá nhân của người dùng và tuân thủ các quy định về bảo mật thông tin.</li>
                                    <li><b>7.Thay đổi điều khoản:</b> Trang web có quyền thay đổi điều khoản sử dụng mà không cần thông báo trước. Người dùng nên kiểm tra lại điều khoản sử dụng thường xuyên để cập nhật các thay đổi mới nhất.</li>
                                    <li><b>8.Giải quyết tranh chấp:</b> Mọi tranh chấp liên quan đến việc sử dụng trang web sẽ được giải quyết theo quy định của pháp luật Việt Nam.</li>
                                        </ul>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đã hiểu</button>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                            </div>
                            <button type="submit" id="submitt" class="btn btn-primary" name="action" value="dang_ky">Đăng ký</button>
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