<?php
require_once "../../dao/hang-hoa.php";
require_once "../../dao/pdo.php";

?>
<h2 class="py-2  text-3xl text-green-700 rounded-md">Thêm mới hàng hóa</h2>
<form action="index.php" method="post" enctype="multipart/form-data" id="Form">
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Mã hàng hóa</label>
            <input type="text" name="ma_hh" class="form-control border-green-500 " disabled placeholder="Mã tự động">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Tên hàng hóa</label>
            <input type="text" name="ten_hh" class="form-control border-green-500">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Đơn giá</label>
            <input type="text" name="don_gia" class="form-control border-green-500">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Giảm giá </label>
            <input type="text" name="giam_gia" class="form-control border-green-500">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Hình ảnh</label>
            <input type="file" name="hinh" class="form-control border-green-500">
        </div>
        <div class=" col-sm-4">
            <div class="form-floating my-3">
                <select class="form-select border-green-500" id="floatingSelect" aria-label="Floating label select example" name="ma_loai">
                    <?php
                    foreach ($loai_hang as $loai_hang) {
                        // extract($loai_hang);
                        echo '<option value="' . $loai_hang['ma_loai'] . '">' . $loai_hang['ten_loai'] . '</option>';
                    }
                    ?>
                </select>
                <label for="floatingSelect">Loại hàng</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-4">
            <label for="">Hàng đặc biệt</label>
            <div class="form-control border-green-500">
                <input type="radio" class="radio-inline" name="dac_biet" value="0"> Bình thường
                <input type="radio" class="radio-inline" name="dac_biet" value="1" checked>Đặc biệt
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label for="">Ngày nhập</label>
            <input type="text" name="ngay_nhap" class="form-control border-green-500">
        </div>
        <div class="form-group col-sm-4">
            <label for="">Số lượt xem</label>
            <input type="text" name="so_luot_xem" class="form-control border-green-500" readonly value="0">
        </div>
    </div>
    <div class="row my-4">
        <div class="">
            <label for="floatingTextarea" class="mx-2">Mô tả</label>
            <textarea class="form-control border-green-500" placeholder="Nhập bình luận tại đây" id="floatingTextarea" rows="6" name="mo_ta"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-6">
        </div>
        <div class="form-group col-sm-12 my-4">
            <button class="btn btn-outline-success bg-green-300" name="btn_insert">Thêm mới</button>
            <button type="reset" class="btn btn-outline-success bg-green-300 mx-3">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-outline-success bg-green-300">Danh sách</a>
        </div>
    </div>
</form>