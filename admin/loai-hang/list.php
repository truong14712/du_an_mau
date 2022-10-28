<h2 class="py-3  text-3xl text-green-700 rounded-md">Danh sách loại hàng</h2>
<span class="p-2 my-2 text-xl text-red-500">
    <?php
    if (isset($MESSAGE) && ($MESSAGE != "")) echo $MESSAGE;
    ?>
</span>
<form action="index.php" method="post">
    <table class="table table-bordered border-green-500 rounded">
        <tr class="bg-green-600 text-white">
            <th class="text-center">Mã loại</th>
            <th class="text-center">Tên loại</th>
            <th class="text-center">Chức năng</th>
        </tr>
        <?php
        foreach ($items as $item) {

        ?>
            <tr>
                <td class=" my-3 text-center">
                    <input type="checkbox" name="ma_loai[]" id="" value="<?= $item[0] ?>">
                    <?php echo $item[0] ?>
                </td>
                <td class=" my-3 text-center"><?php echo $item[1] ?></td>
                <td class="w-[40%] text-center">
                    <a class="btn btn-outline-success bg-green-300" href="./index.php?btn_edit&ma_loai=<?php echo $item[0] ?>"> Sửa</a>
                    <a onclick="return confirm('Có xóa hay không?')?true:false" class="btn btn-outline-success bg-green-300" href="./index.php?btn_delete&ma_loai=<?php echo $item[0] ?>"> Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button id="check-all" type="button" class="btn btn-outline-success bg-green-300">Chọn tất cả</button>
    <button id="clear-all" type="button" class="btn btn-outline-success bg-green-300 mx-3">Bỏ chọn tất cả</button>
    <button id="btn-delete" name="btn_delete" class="mr-3 btn btn-outline-success bg-green-300">Xóa các mục chọn</button>
    <a href="index.php" class="btn btn-outline-success bg-green-300">Nhập thêm</a>
</form>