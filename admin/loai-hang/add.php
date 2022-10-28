<?php
require_once "../../dao/loai.php";
require_once "../../dao/pdo.php";

?>
<h2 class="py-2  text-3xl text-green-700 rounded-md">Thêm mới loại hàng</h2>
<form action="index.php" method="post" enctype="multipart/form-data" id="Form">
    <div class="mb-3">
        <label for="formGroupExampleInput " class="form-label text-xl my-2">Mã loại hàng:</label>
        <input type="text" class="form-control border-green-500" id="formGroupExampleInput" placeholder="Mã tự động" disabled name="ma_loai">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2 " class="form-label text-xl my-2">Tên loại hàng:</label>
        <input type="text" class="form-control border-green-500" id="formGroupExampleInput2" placeholder="" name="ten_loai"> 

    </div>
    <div class="my-2">
        <button class="btn btn-outline-success bg-green-300" name="btn_insert">Thêm mới</button>
        <button type="reset" class="btn btn-outline-success bg-green-300 mx-3">Nhập lại</button>
        <a href="index.php?btn_list" class="btn btn-outline-success bg-green-300">Danh sách</a>
    </div>
</form>