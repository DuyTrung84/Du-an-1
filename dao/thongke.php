<?php 
    require_once 'pdo.php';
    require_once 'loai.php';
    require_once 'binh_luan.php';
    require_once 'san_pham.php';
    function thong_ke_san_pham(){
        $sql= "SELECT lo.ma_loai, lo.ten_loai,"
         "COUNT(*) so_luong,"
         "MIN(sp.don_gia) gia_min,"
         "MAX(sp.don_gia) gia_max,"
         "AVG(sp.don_gia) gia_avg"
         "FROM san_pham sp"
         "JOIN loai lo ON lo.ma_loai=sp.ma_loai"
         "GROUP BY lo.ma_loai, lo.ten_loai";

        return pdo_query($sql);

    }
    
?>