<?php
require_once "../../golbal.php";
require_once "../../dao/thongke.php";

extract($_REQUEST);

if(exist_param("chart", $_REQUEST)){
    $items=thong_ke_san_pham();
    $VIEW_NAME = "chart.php";
}
else{
    $items=thong_ke_san_pham();
    $VIEW_NAME = "list.php";
}

