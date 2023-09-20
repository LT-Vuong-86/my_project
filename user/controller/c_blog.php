<?php
$sanpham=$db->get('sanpham',array());
$reversed_array = $db->order_by('sanpham',array(
    'id_sanpham'=>'DESC',
));

// if ($sanpham != "") {
//     $reversed_array = nl2br($sanpham[0]["nd_sp"]);
// }
// In mảng đảo ngược
$records_per_page = 3;
$total_records=count($reversed_array);
// Calculate the total number of pages
global $total_pages;
$total_pages=5;
// $total_pages = ceil($total_records / $records_per_page);
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
$reversed_array=array_slice($reversed_array, $start_record, $records_per_page);
//$reversed_array=$db->limit('sanpham',$current_page.','.$records_per_page);
require_once("view/v_blog.php") ;
?>
