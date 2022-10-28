<div class="panel panel-default">
    <div class="panel-heading text-center text-[16px]">
        DANH MỤC
    </div>
    <div class="list-group ">
        <?php foreach ($dsloai as $loai) {
            extract($loai);
            $link = "../hang-hoa/liet-ke.php?ma_loai=" . $ma_loai;
            echo "<a  href='$link' class='list-group-item text-[16px] '>$ten_loai</a>";
        } ?>
    </div> 
    <div class="panel-footer">
        <form action="<?= $SITE_URL ?>/hang-hoa/liet-ke.php" method="post">
            <input type="text" name="keywords" id="" placeholder="Từ khóa tìm kiếm" class="form-control my-[8px] border-green-500">
        </form>
    </div>
</div>