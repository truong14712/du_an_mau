<div class="text-[28px] py-[12px] text-green-700">Sản phẩm chi tiết</div>
<div class="thumbnail">
    <img src='<?= $hinh ?>' style="width: 85%; ">
    <div class="caption">
        <p>
        <ul>
            <li class="py-2">MÃ hàng hóa: <?= $ma_hh ?></li>
            <li class="py-2">TÊN hàng hóa: <?= $ten_hh ?></li>
            <li class="py-2">ĐƠN GIÁ: <?= number_format($don_gia, 0) ?>đ</li>
            <li class="py-2">GIẢM GIÁ: <?= $giam_gia ?>%</li>
        </ul>
        </p>
        <div class="text-[22px] mt-[22px] text-center" style="font-weight: 500;">Mô tả</div>
        <div class="py-3"><?= $mo_ta ?></div>
    </div>
</div>
<?php require 'binh-luan.php'; ?>
<?php require 'hang-cung-loai.php'; ?>