<?php
    require_once 'pdo.php';
    function xuat_xu_insert($ten_xx){
        $sql = "INSERT INTO xuat_xu(ten_xx) VALUES(?)";
        pdo_execute($sql, $ten_xx);
       }
       function xuat_xu_update( $ma_xx,$ten_xx,){
        $sql = "UPDATE xuat_xu SET ten_xx=? WHERE ma_xx=?";
        pdo_execute($sql,$ten_xx,$ma_xx);
       }
       function xuat_xu_delete($ma_xx){
        $sql = "DELETE FROM xuat_xu WHERE ma_xx=?";
        if(is_array($ma_xx)){
        foreach ($ma_xx as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_xx);
        }
       }
       function xuat_xu_select_all(){
        $sql = "SELECT * FROM xuat_xu";
        return pdo_query($sql);
       }
       function xuat_xu_select_by_id($ma_xx){
        $sql = "SELECT * FROM xuat_xu WHERE ma_xx=?";
        return pdo_query_one($sql, $ma_xx);
       }
       function xuat_xu_exist($ma_xx){
        $sql = "SELECT count(*) FROM xuat_xu WHERE ma_xx=?";
        return pdo_query_value($sql, $ma_xx) > 0;
       }
                            
?>