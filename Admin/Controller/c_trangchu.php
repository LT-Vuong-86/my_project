<?php
    if(isset($_SESSION['ss_admin'])){
$tong =$db->get('donhang',array());
global $tongdoanhthu;
foreach ($tong as $key => $value) {
    $tongdoanhthu+=$value['tong'];
}
$tong =$db->get('rate_sp',array());
$count_rate= count($tong);
// for ($i=1; $i < 13; $i++) { 
//     $date=date('y');    
//     $like=$i."/".$date;
//     // print_r($like);
//     $week[] =$db->get_like('ctdonhang','ngaydat', $like,array());
   
// }///print_r( $week );
// foreach ($week as $key => $value) {
//    if (isset($value)) {
//     foreach ($value as $key => $valu1e) {
//         if (isset($valu1e)) {
//            // print_r($valu1e);
//             echo "<br>";
//             $id_dh[]=$valu1e['id_donhang'];
//            $nagy[]=$valu1e['ngaydat'];
//         }
//     }

//    // print_r($value);
//    }
// }
// foreach ($id_dh as $value) {
//     $tong=$db->get('donhang',array('id_donhang'=>$value));
//     foreach ($tong as $key => $tong) {
//         global $tongty;
//         $tongty+=$tong['tong'];
//     }
    
// }
// print_r($tongty);

// print_r($nagy);
// $mouth=substr($nagy,3);
// print_r($id_dh);
// echo $like;
// if (isset($week)) {
//     print_r($week);
// }
    require 'View_web/v_trangchu.php';
}else{
    header('location: ?controller=login');
}
?>