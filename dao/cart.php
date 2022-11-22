<?php
    require_once 'pdo.php';
    function cart_insert($ma_sp,$ma_kh,$ten_sp,$don_gia,$giam_gia,$thanh_tien){
        $sql = "INSERT INTO gio_hang(ma_hang,ma_sp,ma_kh,ten_sp,don_gia,giam_gia,thanh_tien) VALUES(?)";
        pdo_execute($sql, $ma_sp,$ma_kh,$ten_sp,$don_gia,$giam_gia,$thanh_tien);
       }
       function cart_update($ma_sp,$ma_kh,$ten_sp,$don_gia,$giam_gia,$thanh_tien){
        $sql = "UPDATE gio_hang SET ma_sp=?,ma_kh=?,ten_sp=?,don_gia=?,giam_gia=?,thanh_tien=? WHERE ma_hang=?";
        pdo_execute($sql, $sql, $ma_sp,$ma_kh,$ten_sp,$don_gia,$giam_gia,$thanh_tien);
       }
       function cart_delete($ma_hang){
        $sql = "DELETE FROM gio_hang WHERE ma_hang=?";
        if(is_array($ma_hang)){
        foreach ($ma_hang as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_hang);
        }
       }
       function cart_select_all(){
        $sql = "SELECT * FROM gio_hang";
        return pdo_query($sql);
       }
       function cart_select_by_id($ma_hang){
        $sql = "SELECT * FROM gio_hang WHERE ma_hang=?";
        return pdo_query_one($sql, $ma_hang);
       }
                            
?>