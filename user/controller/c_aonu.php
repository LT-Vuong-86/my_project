<?php
    $id = $_GET['id'];
    $product = $db->
    $aonu = $db->get('sanpham',array('id_danhmuc'=>$id));
    require 'view/v_aonu.php';
?>