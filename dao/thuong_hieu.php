<?php
    require_once 'pdo.php';
    function thuong_hieu_insert($ten_th,$email){
        $sql = "INSERT INTO thuong_hieu(ten_th,email) VALUES(?,?)";
        pdo_execute($sql, $ten_th,$email);
       }
       function thuong_hieu_update( $ma_th,$ten_th,$email){
        $sql = "UPDATE thuong_hieu SET ten_th=?,email=? WHERE ma_th=?";
        pdo_execute($sql,$ten_th,$email,$ma_th);
       }
       function thuong_hieu_delete($ma_th){
        $sql = "DELETE FROM thuong_hieu WHERE ma_th=?";
        if(is_array($ma_th)){
        foreach ($ma_th as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_th);
        }
       }
       function thuong_hieu_select_all(){
        $sql = "SELECT * FROM thuong_hieu";
        return pdo_query($sql);
       }
       function thuong_hieu_select_by_id($ma_th){
        $sql = "SELECT * FROM thuong_hieu WHERE ma_th=?";
        return pdo_query_one($sql, $ma_th);
       }
       function thuong_hieu_exist($ma_th){
        $sql = "SELECT count(*) FROM thuong_hieu WHERE ma_th=?";
        return pdo_query_value($sql, $ma_th) > 0;
       }
                            
?>