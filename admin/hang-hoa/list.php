<?php
?>
<h2 class="py-3  text-2xl text-green-700 rounded-md">Danh sách hàng hóa</h2>
<span class="p-2 my-2 text-xl text-red-500">
    <?php
    if (isset($MESSAGE) && ($MESSAGE != "")) echo $MESSAGE;
    ?>
</span>

<div class="flex item-center my-[8px] ">

</div>
<ul class=" my-3 pager flex justify-content-center align-self-center">
    <li class="p-2 mx-3 "><a class="btn btn-outline-success btn-md" href="?btn_list&page_no=0">|&lt;</a></li>
    <li class="p-2 mx-3 "><a class="btn btn-outline-success btn-md" href="?btn_list&page_no=<?= $_SESSION['page_no'] <= 0 ? $_SESSION['page_no'] : $_SESSION['page_no'] - 1 ?>">&lt;&lt;</a></li>
    <li class="p-2 mx-3 "><a class="btn btn-outline-success btn-md" href="?btn_list&page_no=<?= $_SESSION['page_no'] + 1 ?>">&gt;&gt;</a></li>
    <li class="p-2 mx-3 "><a class="btn btn-outline-success btn-md" href="?btn_list&page_no=<?= $_SESSION['page_count'] - 1 ?>">&gt;|</a></li>
</ul>




<form action="index.php" method="post">
    <table class="table table-bordered border-green-500 rounded">
        <tr class="bg-green-600 text-white">
            <th class="text-center">Mã hàng hóa</th>
            <th class="text-center">Tên hàng hóa</th>
            <th class="text-center">Đơn giá</th>
            <th class="text-center">Hình</th>
            <th class="text-center">Giảm giá</th>
            <th class="text-center">Lượt xem</th>
            <th class="text-center">Chức năng</th>
        </tr>
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <tr>
                <td class=" my-3 text-center ">
                    <input type="checkbox" name="ma_hh[]" id="" value=" <?= $ma_hh ?>">
                    <?= $ma_hh ?>
                </td>
                <td class=" my-3 text-center"><?= $ten_hh ?></td>
                <td class=" my-3 text-center"><?= number_format($don_gia, 0) ?></td>
                <td class=" my-3 text-center"><img src="<?= $hinh ?>" alt="" style="width: 200px; height: 200px;"></td>

                <td class=" my-3 text-center"><?= $giam_gia ?>%</td>
                <td class=" my-3 text-center"><?= $so_luot_xem ?></td>
                <td class=" text-center">
                    <a class="btn btn-outline-success bg-green-300" href="./index.php?btn_edit&ma_hh=<?php echo $item[0] ?>"> Sửa</a>
                    <a onclick="return confirm('Có xóa hay không?')?true:false" class="btn btn-outline-success bg-green-300" href="./index.php?btn_delete&ma_hh=<?php echo $item[0] ?>"> Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <button id="check-all" type="button" class="btn btn-outline-success bg-green-300">Chọn tất cả</button>
    <button id="clear-all" type="button" class="btn btn-outline-success bg-green-300 mx-3">Bỏ chọn tất cả</button>
    <button id="btn-delete" name="btn_delete" class="mr-3 btn btn-outline-success bg-green-300">Xóa các mục chọn</button>
    <a href="index.php" class="btn btn-outline-success bg-green-300">Nhập thêm</a>
</form>