<?php
    require_once 'pdo.php';
    function kh_insert($ho_ten,$mat_khau,$email,$dia_chi,$sdt,$hinh,$vai_tro){
        $sql = "INSERT INTO khach_hang(ho_ten,mat_khau,email,dia_chi,sdt,hinh,vai_tro) VALUES(?,?,?,?,?,?,?)";
        pdo_execute($sql, $ho_ten,$mat_khau,$email,$dia_chi,$sdt,$hinh,$vai_tro);
       }
       function kh_update($ma_kh,$ho_ten,$mat_khau,$email,$dia_chi,$sdt,$hinh,$vai_tro){
        $sql = "UPDATE khach_hang SET ho_ten=?,mat_khau=?,email=?,dia_chi=?,sdt=?,hinh=?,vai_tro=? WHERE ma_kh=?";
        pdo_execute($sql,$ho_ten,$mat_khau,$email,$dia_chi,$sdt,$hinh,$vai_tro,$ma_kh);
       }
       function kh_delete($ma_kh){
        $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
        if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_kh);
        }
       }
       function kh_select_all(){
        $sql = "SELECT * FROM khach_hang";
        return pdo_query($sql);
       }
       function kh_select_by_id($ma_kh){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
        return pdo_query_one($sql, $ma_kh);
       }
       function kh_exist($ma_kh){
        $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh=?";
        return pdo_query_value($sql, $ma_kh) > 0;
       }
        function san_pham_select_by_loai_hang($ma_loai){ 
        $sql = "SELECT * FROM san_pham WHERE ma_loai=?";
        return pdo_query($sql, $ma_loai);
       }
                            
?>
