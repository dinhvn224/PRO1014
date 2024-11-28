<table class="table">
    <thead>
        <tr>

            <th scope="col">Tên loại</th>
            <th scope="col">Mã loại</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá thấp nhất</th>
            <th scope="col">Giá cao nhất</th>
            <th scope="col">Giá trung bình</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($thong_ke as $tk) { ?>
            <tr>
                <td><?php echo $tk['ten_loai'] ?></td>
                <td><?php echo $tk['ma_loai'] ?></td>
                <td><?php echo $tk['so_luong'] ?></td>
                <td><?php echo $tk['gia_min'] ?></td>
                <td><?php echo $tk['gia_max'] ?></td>
                <td><?php echo $tk['gia_trung_binh'] ?></td>




            </tr>
        <?php } ?>

    </tbody>
</table>
<label for="">Đơn hàng</label>
<table class="table">
    <thead>
        <tr>

            <th scope="col">Số đơn</th>
            <th scope="col">Tổng doanh thu</th>
            <th scope="col">Đơn cao nhất</th>
            <th scope="col">Đơn thấp nhất</th>

        </tr>
    </thead>
    <tbody>
        
        <?php $max=0;$i=0; $tong=0; foreach ($getorder_minmax as $tk) { 
                $tong=$tong+$tk['sum'];
                if($tk['sum']>$max){
                    $maxValue=$tk['sum'];
                    $max=$tk['sum'];
                }
                if($i==0){
                    $min=$tk['sum'];
                }
                if($tk['sum']<=$min){
                    $minValue=$tk['sum'];
                    $min=$tk['sum'];
                }
                $i++;
        }
        
            ?>
            <tr>
                <td><?php echo $getorder['num'] ?></td>
                <td><?php echo $tong ?></td>
                <td><?php echo $maxValue??0 ?></td>
                <td><?php echo $minValue??0 ?></td>
            </tr>

    </tbody>
        </table>
        