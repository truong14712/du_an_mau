<?php
require '../../global.php';
require '../../dao/khach-hang.php';
require '../../dao/loai.php';

extract($_REQUEST);
if (exist_param("btn_register")) {

    if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    } elseif (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Mã khách hàng đã tồn tại";
    } else {
        $target_dir = "../../content/./images/./users/";
        $allowUpload = true;
        $target_file = $target_dir . $_FILES["up_hinh"]["name"];
        if ($allowUpload) {
            move_uploaded_file($_FILES["up_hinh"]["tmp_name"], $target_file);
        }
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $target_file, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}
$VIEW_NAME = "dang-ky-form.php";
$dsloai = loai_select_all();
require '../layout.php';
