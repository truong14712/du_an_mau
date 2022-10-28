<h3 class="py-2  text-3xl text-green-700 rounded-md">CHI TIẾT BÌNH LUẬN</h3>
<?php
if (strlen($MESSAGE)) {
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="index.php?ma_hh=<?= $ma_hh ?>" method="post">
    <h3 class="text-[22px] my-[12px] ">TÊN HÀNG HÓA: <?= $items[0]['ten_hh'] ?></h3>
    <table class="table table-bordered border-green-500 rounded">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="text-center">Mã bình luận</th>
                <th class="text-center">Nội dung</th>
                <th class="text-center">Ngày bình luận</th>
                <th class="text-center">Người bình luận</th>
                <th class="text-center">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) {
                extract($item);
            ?>
                <tr>
                    <td class="text-center"><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"><?= $ma_bl ?></td>
                    <td class="text-center"><?= $noi_dung ?></td>
                    <td class="text-center"><?= $ngay_bl ?></td>
                    <td class="text-center"><?= $ma_kh ?></td>
                    <td class="text-center">
                        <a class="mr-3 btn btn-outline-success bg-green-300" href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button id="check-all" type="button" class="btn btn-outline-success bg-green-300">Chọn tất cả</button>
    <button id="clear-all" type="button" class="btn btn-outline-success bg-green-300 mx-3">Bỏ chọn tất cả</button>
    <button id="btn-delete" name="btn_delete" class="mr-3 btn btn-outline-success bg-green-300">Xóa các mục chọn</button>
</form>
</body>

</html>