<?php
require "../../global.php";
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";
check_login();
if (exist_param("ma_hh")) {
    $ma_hh = $_REQUEST['ma_hh'];
    if (exist_param("btn_delete")) {
        $ma_bl = $_REQUEST['ma_bl'];
        try {
            binh_luan_delete($ma_bl);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
    }
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    if (count($items) == 0) {
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "binh-luan/list.php";
    } else {
        $VIEW_NAME = "binh-luan/detail.php";
    }
} else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "binh-luan/list.php";
}
require "../layout.php";
