<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Xin chào Admin</h1>

    </div>


    <div class="row overflow-scroll">

        <table class="table table-striped ">
            <thead>
                <tr>
                    <td>Mã bình luận</td>
                    <td>Người đăng</td>
                    <td>Mã hàng hóa</td>
                    <td>Nội dung</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($binh_luan as $val){?>
                <tr>
                    <td><?=$val['ma_binh_luan']?></td>
                    <td><?=$val['ho_ten']?></td>
                    <td><?=$val['ma_hang_hoa']?></td>
                    <td><?=$val['noi_dung']?></td>
                    <td class="d-flex">
                        <a role="button" class="btn btn-info mr-1" href="index.php?ma_hang_hoa=<?=$val['ma_hang_hoa']?>#bl<?=$val['ho_ten']?>">Xem</a>
                        <form action="" method="POST">
                            <input onclick="confirm('Bạn có chắc muốn xóa bình luận này')" value="Xóa" class="btn btn-danger" type="submit" name="btn<?=$val['ma_binh_luan']?>">
                        </form>
                        <?php 
                            include_once 'model/database.php';
                            if(isset($_POST['btn'.$val['ma_binh_luan']])){
                                $sql = "DELETE FROM binh_luann WHERE ma_binh_luan = ".$val['ma_binh_luan'];
                                
                                if((new database())->pdo_execute_run($sql)){
                                    echo "<script>location.reload();</script>";
                                }
                                
                            }
                        ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
    