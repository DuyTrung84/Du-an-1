<?php
    require_once 'pdo.php';
    function chinh_sua_insert($logo, $dia_chi, $sdt, $email,$copyright){
        $sql = "INSERT INTO chinh_sua(logo, dia_chi, sdt, email,copyright) VALUES(?,?,?,?,?)";
        pdo_execute($sql, $logo, $dia_chi, $sdt, $email,$copyright);
       }
       function chinh_sua_update($logo, $dia_chi, $sdt, $email,$copyright){
        $sql = "UPDATE chinh_sua SET logo=?,dia_chi=?,sdt=?,email=?,copyright=?, WHERE id=?";
        pdo_execute($sql, $logo, $dia_chi, $sdt, $email,$copyright);
       }
       function chinh_sua_delete($id){
        $sql = "DELETE FROM chinh_sua WHERE id=?";
        if(is_array($id)){
        foreach ($id as $ma) {
        pdo_execute($sql, $ma);
        }
        }
        else{
        pdo_execute($sql, $id);
        }
       }
       function chinh_sua_select_all(){
        $sql = "SELECT * FROM chinh_sua";
        return pdo_query($sql);
       }
       function chinh_sua_select_by_id($id){
        $sql = "SELECT * FROM chinh_sua WHERE id=?";
        return pdo_query_one($sql, $id);
       }
       function chinh_sua_exist($id){
        $sql = "SELECT count(*) FROM chinh_sua WHERE id=?";
        return pdo_query_value($sql, $id) > 0;
       }
                            
?>