<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/loai.php';
check_login();
extract($_REQUEST);
if (exist_param("btn_update")) {
    $anh_cu = $_POST["hinh"];
    $target_dir = "../../content/./images/./users/";
    if ($_FILES["up_hinh"]["size"] > 0) {
        $target_file = $target_dir . $_FILES["up_hinh"]["name"];
        move_uploaded_file($_FILES["up_hinh"]["tmp_name"], $target_file);
    } else {
        $target_file = $anh_cu;
    }
    try {
        khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $target_file, $kich_hoat, $vai_tro);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}
$items = khach_hang_select_all();

$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
$dsloai = loai_select_all();
require '../layout.php';
