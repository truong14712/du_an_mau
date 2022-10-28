<h2 class="py-3  text-3xl text-green-700 rounded-md">Thống kê hàng hóa từng loại</h2>
<form action="index.php" method="post">
    <table class="table table-bordered border-green-500 rounded">
        <tr class="bg-green-600 text-white">
            <th class="text-center">Loại hàng</th>
            <th class="text-center">Số lượng</th>
            <th class="text-center">Giá cao nhất</th>
            <th class="text-center">Giá thấp nhất</th>
            <th class="text-center">Giá trung bình</th>
        </tr>
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <tr>
                <td class=" my-3 text-center"><?= $ten_loai ?></td>
                <td class=" my-3 text-center"><?= $so_luong ?></td>
                <td class=" my-3 text-center"><?= number_format($gia_max, 0) ?></td>
                <td class=" my-3 text-center"><?= number_format($gia_min, 0) ?></td>
                <td class=" my-3 text-center"><?= number_format($gia_avg, 0) ?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.php?chart" class="btn btn-outline-success bg-green-300">Xem biểu đồ</a>
</form>