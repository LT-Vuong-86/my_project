<?php
global $sanpham;
if (isset($_GET['keywork'])) {

    $keywork = str_replace('+', '',$_GET['keywork']);

    $sanpham=$db->get_like('sanpham','tensanpham',$keywork,array());
    require_once "view/v_shop.php";
}elseif
(isset($_GET['id_dm'])){
    $id_dm=$_GET['id_dm'];
  
    $sanpham=$db->get('sanpham',array('id_danhmuc'=>$id_dm));
    require_once "view/v_shop.php";
}
else {
    $sanpham = $db->get('sanpham', array());
    
}
    // Define the number of records per page
    $records_per_page = 12;
    $total_records=count($sanpham);
    // Calculate the total number of pages
    global $total_pages;
    $total_pages = ceil($total_records / $records_per_page);
    // Get the current page number
    
    $current_page = $_GET['page'] ?? 1;
    // var_dump($current_page);
    // Get the start and end records for the current page
    $start_record = ($current_page - 1) * $records_per_page;
    $end_record = $current_page * $records_per_page;
    
    // Iterate through the records and output them
    // foreach ($sanpham as $sanphams) {
    //   $sanpham=$sanphams;
    // }

    $sanpham=$db->get_limit('sanpham',array(),$start_record.','.$records_per_page);
    // Generate the pagination links
    
    require "view/v_shop.php";
?>