<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class="py-3  text-3xl text-green-700 rounded-md">Tổng hợp bình luận</h2>
    <form action="index.php" method="post">
        <table class="table table-bordered border-green-500 rounded">
            <thead class="bg-green-600 text-white">
                <tr>
                    <th class="text-center">Tên hàng hóa</th>
                    <th class="text-center">Số bình luận</th>
                    <th class="text-center">Mới nhất</th>
                    <th class="text-center">Cũ nhất</th>
                    <th class="text-center">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <tr>
                        <td class="text-center"><?= $ten_hh ?></td>
                        <td class="text-center"><?= $so_luong ?></td>
                        <td class="text-center"><?= $cu_nhat ?></td>
                        <td class="text-center"><?= $moi_nhat ?></td>
                        <td class="text-center border-green-500"><a class="px-[8px] btn btn-outline-success bg-green-300" href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>">Chi tiết</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>