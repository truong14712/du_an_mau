<?php
if (is_array($items)) {
    extract($items);
}

?>

<h2 class="py-2  text-3xl text-green-700 rounded-md">Cập nhật loại hàng</h2>
<span class="p-2 my-2 text-xl text-red-500">
    <?php
    if (isset($MESSAGE) && ($MESSAGE != "")) echo $MESSAGE;
    ?>
</span>
<form action="index.php" method="post" enctype="multipart/form-data" id="Form">
    <div class="mb-3">
        <label for="formGroupExampleInput " class="form-label text-xl my-2">Mã loại hàng:</label>
        <input readonly type="text" class="form-control border-green-400 bg-gray-300 " id="formGroupExampleInput" name="ma_loai" value="<?php echo $_REQUEST['ma_loai'] ?>">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2 " class="form-label text-xl my-2">Tên loại hàng:</label>
        <input type="text" class="form-control border-green-500" id="formGroupExampleInput2" placeholder="" name="ten_loai" value="<?= $ten_loai ?>">
    </div>
    <div class="my-2">
        <button class="btn btn-outline-success bg-green-300 " name="btn_update">Cập nhật</button>
        <button type="reset" class="btn btn-outline-success bg-green-300 mx-3">Nhập lại</button>
        <a href="index.php" class="mr-3 btn btn-outline-success bg-green-300">
            Thêm mới
        </a>
        <a href="index.php?btn_list" class="btn btn-outline-success bg-green-300">Danh sách</a>
    </div>
</form>