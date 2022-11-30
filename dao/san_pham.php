<?php
    require_once 'pdo.php';
    function san_pham_insert($ten_sp,$don_gia,$giam_gia,$hinh,$mo_ta,$ma_th,$ma_xx,$ma_uu_dai,$thanh_phan,$so_luot_xem,$ma_loai){
        $sql = "INSERT INTO san_pham(ten_sp,don_gia,giam_gia,hinh,mo_ta,ma_th,ma_xx,ma_uu_dai,thanh_phan,so_luot_xem,ma_loai) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql, $ten_sp,$don_gia,$giam_gia,$hinh,$mo_ta,$ma_th,$ma_xx,$ma_uu_dai,$thanh_phan,$so_luot_xem,$ma_loai);
       }
       function san_pham_update($ma_sp,$ten_sp,$don_gia,$giam_gia,$hinh,$mo_ta,$ma_th,$ma_xx,$ma_uu_dai,$thanh_phan,$so_luot_xem,$ma_loai){
        $sql = "UPDATE san_pham SET ten_sp=?,don_gia=?,giam_gia=?,hinh=?,mo_ta=?,ma_th=?,ma_xx=?,ma_uu_dai=?,thanh_phan=?,so_luot_xem=?,ma_loai=? WHERE ma_sp=?";
        pdo_execute($sql,$ten_sp,$don_gia,$giam_gia,$hinh,$mo_ta,$ma_th,$ma_xx,$ma_uu_dai,$thanh_phan,$so_luot_xem,$ma_loai,$ma_sp);
       }
       function san_pham_delete($ma_sp){
        $sql = "DELETE FROM san_pham WHERE ma_sp=?";
        if(is_array($ma_sp)){
        foreach ($ma_sp as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $ma_sp);
        }
       }
       function san_pham_select_all(){
        $sql = "SELECT * FROM san_pham order by ma_sp desc";
        return pdo_query($sql);
       }

       function san_pham_select_by_id($ma_sp){
        $sql = "SELECT * FROM san_pham WHERE ma_sp=?";
        return pdo_query_one($sql, $ma_sp);
       }
       function san_pham_select_all_view(){
        $sql = "SELECT * FROM san_pham order by so_luot_xem desc";
        return pdo_query($sql);
       }
       function san_pham_exist($ma_loai){ 
        $sql = "SELECT count(*) FROM san_pham WHERE ma_sp=?";
        return pdo_query_value($sql, $ma_sp) > 0;
       }

                            
?>