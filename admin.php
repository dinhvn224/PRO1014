<?php
session_start();
$ma_khach_hang = $_SESSION['id'];

include "admin_controller/c_admin.php";
$c_admin = new C_Admin();

$c_admin->hienthimanhinh();
return;
