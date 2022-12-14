<?php
    require_once 'pdo.php';
    function loai_insert($ten_loai,$hinh){
        $sql = "INSERT INTO loai(ten_loai,hinh) VALUES(?,?)";
        pdo_execute($sql, $ten_loai,$hinh);
       }
       function loai_update( $ma_loai,$ten_loai,$hinh){
        $sql = "UPDATE loai SET ten_loai=?,hinh=? WHERE ma_loai=?";
        pdo_execute($sql,$ten_loai,$hinh,$ma_loai);
       }
       function loai_delete($ma_loai){
        $sql = "DELETE FROM loai WHERE ma_loai=?";
        if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_loai);
        }
       }
       function loai_select_all(){
        $sql = "SELECT * FROM loai";
        return pdo_query($sql);
       }
       function loai_select_by_id($ma_loai){
        $sql = "SELECT * FROM loai WHERE ma_loai=?";
        return pdo_query_one($sql, $ma_loai);
       }
       function loai_exist($ma_loai){
        $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
        return pdo_query_value($sql, $ma_loai) > 0;
       }
                            
?>