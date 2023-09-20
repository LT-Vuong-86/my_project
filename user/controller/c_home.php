<?php

   $index = 0;
	$sanpham = $db->get('sanpham', array());

    
	$sp_shirt_girl1 =$db->get('sanpham',array('id_danhmuc'=>1));
    $sp_shirt_girl = [];

    for ($i = 0; $i < count($sp_shirt_girl1); $i++) {
        $rand_index = mt_rand(0, count($sp_shirt_girl1) - 1);
        $rand_element = $sp_shirt_girl1[$rand_index];
        if (!in_array($rand_element, $sp_shirt_girl)) {
            $sp_shirt_girl[] = $rand_element;
        }
    }
    $sp_trousers_girl1 =$db->get('sanpham',array('id_danhmuc'=>2));
    $sp_trousers_girl = [];

    for ($i = 0; $i < count($sp_trousers_girl1); $i++) {
        $rand_index = mt_rand(0, count($sp_trousers_girl1) - 1);
        $rand_element = $sp_trousers_girl1[$rand_index];
        if (!in_array($rand_element, $sp_trousers_girl)) {
            $sp_trousers_girl[] = $rand_element;
        }
    }
    $sp_dress1 =$db->get('sanpham',array('id_danhmuc'=>3));
    $sp_dress = [];

    for ($i = 0; $i < count($sp_dress1); $i++) {
        $rand_index = mt_rand(0, count($sp_dress1) - 1);
        $rand_element = $sp_dress1[$rand_index];
        if (!in_array($rand_element, $sp_dress)) {
            $sp_dress[] = $rand_element;
        }
    }
    $sp_shirt_boy1 =$db->get('sanpham',array('id_danhmuc'=>4));
    $sp_shirt_boy = [];
    for ($i = 0; $i < count($sp_shirt_boy1); $i++) {
        $rand_index = mt_rand(0, count($sp_shirt_boy1) - 1);
        $rand_element = $sp_shirt_boy1[$rand_index];
        if (!in_array($rand_element, $sp_shirt_boy)) {
            $sp_shirt_boy[] = $rand_element;
        }
    }
    $sp_trousers_boy1 =$db->get('sanpham',array('id_danhmuc'=>5));
    $sp_trousers_boy = [];
    for ($i = 0; $i < count($sp_trousers_boy1); $i++) {
        $rand_index = mt_rand(0, count($sp_trousers_boy1) - 1);
        $rand_element = $sp_trousers_boy1[$rand_index];
        $sp_trousers_boy[] = $rand_element;
        if (!in_array($rand_element, $sp_trousers_boy)) {
            $sp_trousers_boy[] = $rand_element;
        }
    }
    $sp_vest1 =$db->get('sanpham',array('id_danhmuc'=>6));
    $sp_vest = [];

for ($i = 0; $i < count($sp_vest1); $i++) {
    $rand_index = mt_rand(0, count($sp_vest1) - 1);
    $rand_element = $sp_vest1[$rand_index];
    if (!in_array($rand_element, $sp_vest)) {
        $sp_vest[] = $rand_element;
    }
}
//     $sp_shirt_kids1 =$db->get('sanpham',array('id_danhmuc'=>7));
//     $sp_shirt_kids = [];
// for ($i = 0; $i < 10; $i++) {
//     $rand_index = mt_rand(0, count($sp_shirt_kids1) - 1);
//     $rand_element = $sp_shirt_kids1[$rand_index];

//     $sp_shirt_kids[] = $rand_element;
// }
    // $sp_trousers_kids1 =$db->get('sanpham',array('id_danhmuc'=>8));
    // $sp_trousers_kids = [];

    // for ($i = 0; $i < 10; $i++) {
    //     $rand_index = mt_rand(0, count($sp_trousers_kids1) - 1);
    //     $rand_element = $sp_trousers_kids1[$rand_index];
    
    //     $sp_trousers_kids[] = $rand_element;
    // }
    $sp_suit_kids1 =$db->get('sanpham',array('id_danhmuc'=>9));
    $sp_suit_kids = [];

    for ($i = 0; $i < count($sp_suit_kids1); $i++) {
        $rand_index = mt_rand(0, count($sp_suit_kids1) - 1);
        $rand_element = $sp_suit_kids1[$rand_index];
        if (!in_array($rand_element, $sp_suit_kids)) {
            $sp_suit_kids[] = $rand_element;
        }
    }
    
    require "view/v_home.php";
?>