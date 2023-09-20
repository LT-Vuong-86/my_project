<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_sanpham = $db->get_like('sanpham',$search_codition,$content,array());
        }else {
            $data_sanpham = $db->get('sanpham', array()); 
        }
        require 'View_web/v_sanpham.php';
    }else{
        header('location: ?controller=login');
    }
   
?>