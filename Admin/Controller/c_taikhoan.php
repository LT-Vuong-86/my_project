<?php
    if(isset($_SESSION['ss_admin'])){
        $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
        if (isset($_POST['search'])) {
            $search_codition=$_POST['search_codition'];
            $content=$_POST['content'];
            $data_nhanvien = $db->get_like('taikhoan',$search_codition,$content,array());
        }else {
            $data_nhanvien = $db->get('taikhoan', array());
        }
        require 'View_web/v_taikhoan.php';
    }else{
        header('location: ?controller=login');
    }
   
?>