<?php
    require_once 'pdo.php';
    function uu_dai_insert($noi_dung,$ngay_bat_dau,$ngay_ket_thuc){
        $sql = "INSERT INTO uu_dai(noi_dung,ngay_bat_dau,ngay_ket_thuc) VALUES(?,?,?)";
        pdo_execute($sql, $noi_dung,$ngay_bat_dau,$ngay_ket_thuc);
       }
       function uu_dai_update($noi_dung,$ngay_bat_dau,$ngay_ket_thuc){
        $sql = "UPDATE uu_dai SET noi_dung=?,ngay_bat_dau=?,ngay_ket_thuc=? WHERE ma_uu_dai=?";
        pdo_execute($sql,$noi_dung,$ngay_bat_dau,$ngay_ket_thuc);
       }
       function uu_dai_delete($ma_uu_dai){
        $sql = "DELETE FROM uu_dai WHERE ma_uu_dai=?";
        if(is_array($ma_uu_dai)){
        foreach ($ma_uu_dai as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_uu_dai);
        }
       }
       function uu_dai_select_all(){
        $sql = "SELECT * FROM uu_dai";
        return pdo_query($sql);
       }
       function uu_dai_select_by_id($ma_uu_dai){
        $sql = "SELECT * FROM uu_dai WHERE ma_uu_dai=?";
        return pdo_query_one($sql, $ma_uu_dai);
       }
       function uu_dai_exist($ma_uu_dai){
        $sql = "SELECT count(*) FROM uu_dai WHERE ma_uu_dai=?";
        return pdo_query_value($sql, $ma_uu_dai) > 0;
       }
                            
?>