<div class="panel panel-default">
    <div class="panel-heading text-center text-[16px] ">TOP 10 YÊU THÍCH</div>
    <?php
    require_once '../../dao/hang-hoa.php';
    $hh_array = hang_hoa_select_top10();
    ?>
    <div class="panel-body nn-panel-body container-fluid">
        <?php foreach ($hh_array as $hh) {
            extract($hh);
            // print_r($hh);
            $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
            echo " <div class='row border-t-[1px] pt-[8px]' style='margin-bottom: 20px !important;'>

            <div class='col-xs-4 '>
            <a href='$href' class='hover'>
            <img src='$hinh' alt=''style='width: auto;' >
            </a>
            </div>
            <div class='col-xs-6'> <a href='$href' class='text-[14px] hover'>$ten_hh</a></div>
                </div> ";
        } ?>

    </div>
</div>