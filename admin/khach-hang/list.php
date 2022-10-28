<h2 class="py-3  text-3xl text-green-700 rounded-md">Danh sách khách hàng</h2>
<span class="p-2 my-2 text-xl text-red-500">
    <?php
    if (isset($MESSAGE) && ($MESSAGE != "")) echo $MESSAGE;
    ?>
</span>
<form action="index.php" method="post">
    <table class="table table-bordered border-green-500 rounded">
        <tr class="bg-green-600 text-white">
            <th class="text-center">Mã loại</th>
            <th class="text-center">Họ và tên</th>
            <th class="text-center">Địa chỉ email</th>
            <th class="text-center">Hình ảnh</th>
            <th class="text-center">Vai trò</th>
            <th class="text-center">Chức năng</th>
        </tr>
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <tr>
                <td class=" my-3 text-center ">
                    <input type="checkbox" name="ma_kh[]" id="" value="<?= $ma_kh ?>">
                    <?= $ma_kh ?>
                </td>
                <td class=" my-3 text-center"><?= $ho_ten ?></td>
                <td class=" my-3 text-center"><?= $email ?></td>
                <td class=" my-3 ">
                    <img class="w-[120px] h-[120px]" src="<?= $hinh ?>" alt="">
                </td>
                <td class=" my-3 text-center"><?= $vai_tro ? 'Nhân viên' : 'Khách hàng' ?></td>
                <td class=" text-center">
                    <a class="btn btn-outline-success bg-green-300" href="./index.php?btn_edit&ma_kh=<?php echo $item[0] ?>"> Sửa</a>
                    <a onclick="return confirm('Có xóa hay không?')?true:false" class="btn btn-outline-success bg-green-300" href="./index.php?btn_delete&ma_kh=<?php echo $item[0] ?>&vai_tro=<?= $vai_tro   ?>"> Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <button id="check-all" type="button" class="btn btn-outline-success bg-green-300">Chọn tất cả</button>
    <button id="clear-all" type="button" class="btn btn-outline-success bg-green-300 mx-3">Bỏ chọn tất cả</button>
    <button id="btn-delete" name="btn_delete" class="mr-3 btn btn-outline-success bg-green-300">Xóa các mục chọn</button>
    <a href="index.php" class="btn btn-outline-success bg-green-300">Nhập thêm</a>
</form>