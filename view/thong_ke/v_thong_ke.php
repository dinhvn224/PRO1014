<form id="monthYearForm" action="" method="POST">
    <h2>  <label for="monthPicker">Chọn tháng và năm</label></h2>
    <input type="month" id="monthPicker" name="month" required>
    <button type="submit" name="month-year-btn">Xác nhận</button>
</form>
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
<h2>
<?php
    if(isset($_POST['month'])){
        $date = DateTime::createFromFormat('Y-m', $_POST['month']);
        $year = $date->format('Y'); 
        $month = $date->format('m'); 
        echo'<label for="">Thống kê đơn hàng trong tháng '.$month.' năm '.$year.'</label>';
    }else{
        echo'<label for="">Thống kê đơn hàng toàn thời gian</label>';
    }
?>
</h2>

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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="content">
   <h2>Biểu đồ theo tháng</h2>
    <canvas id="orderChart" width="400" height="200"></canvas>
</div>

<?php
// Kết nối với cơ sở dữ liệu MySQL
$mysqli = new mysqli("localhost", "root", "", "du_an1");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT MONTH(dateOrder) AS month, COUNT(*) AS order_count FROM don_hang GROUP BY MONTH(dateOrder) order by MONTH(dateOrder) desc";
$result = $mysqli->query($sql);

// Tạo mảng để chứa dữ liệu
$months = [];
$orderCounts = [];

while ($row = $result->fetch_assoc()) {
    $months[] = "Tháng " . $row['month'];
    $orderCounts[] = $row['order_count'];
}

$mysqli->close();
?>

<script>
// Dữ liệu từ PHP
const months = <?php echo json_encode($months); ?>;
const orderCounts = <?php echo json_encode($orderCounts); ?>;

// Tạo biểu đồ
const ctx = document.getElementById('orderChart').getContext('2d');
const orderChart = new Chart(ctx, {
    type: 'bar', // Biểu đồ cột
    data: {
        labels: months, // Các tháng
        datasets: [{
            label: 'Số lượng đơn hàng',
            data: orderCounts, // Dữ liệu số lượng đơn hàng
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Màu nền của cột
            borderColor: 'rgba(54, 162, 235, 1)', // Màu viền của cột
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true // Bắt đầu từ 0 trên trục y
            }
        }
    }
});
</script>

        