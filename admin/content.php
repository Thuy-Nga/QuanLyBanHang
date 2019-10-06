<?php
if (!isset($_GET['quanly']) && !isset($_GET['hd'])) {
    include './quanli_nhomhh/index_nhomhh.php';
} elseif (isset($_GET['quanly']) && isset($_GET['hd'])) {
    $quanli = $_GET['quanly'];
    $hanhdong = $_GET['hd'];

    if($quanli == 'nhomhh'){
        if ($hanhdong == 'lietkenhom') {
            include './quanli_nhomhh/index_nhomhh.php';
        } elseif ($hanhdong == 'themnhom') {
            include './quanli_nhomhh/add_nhomhh.php';
        } elseif($hanhdong == 'suanhom'){
            include './quanli_nhomhh/eddit_nhomhh.php';
        }
    }elseif($quanli == 'hh'){
        if ($hanhdong == 'lietkehh') {
            include './quanli_hh/index_hh.php';
        }else if($hanhdong == 'themhh'){
            include './quanli_hh/add_hh.php';
        }
    }elseif($quanli == 'nv'){
        if ($hanhdong == 'lietkenv') {
            include './quanli_nhanvien/index_nv.php';
        }
    }
}
?>


