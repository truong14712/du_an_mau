<?php
require "../../global.php";
require "../../dao/pdo.php";
require "../../dao/loai.php";
if (exist_param("gioi_thieu")) {
    $VIEW_NAME = "gioi-thieu.php";
} else if (exist_param("lien_he")) {
    $VIEW_NAME = "lien-he.php";
} else if (exist_param("gop_y")) {
    $VIEW_NAME = "gop-y.php";
} else if (exist_param("hoi_dap")) {
    $VIEW_NAME = "hoi-dap.php";
} else {
    require_once '../../dao/hang-hoa.php';
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "home.php";
}
$dsloai = loai_select_all();
require "../layout.php";
