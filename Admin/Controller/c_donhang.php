<?php
    //Kiểm tra xem người dùng đã đăng nhập chưua
	if (isset($_SESSION['ss_admin'])) {
        //Nếu đã đăng nhập thì lấy thông tin người dùng theo ss
        $donhang=$db->get('donhang',array());
        if (isset($_POST['search'])) {

            global $codition_search;
            $codition_search=$_POST['codition_search'];
            $content=$_POST['content'];
            $donhang = $db->get_like('donhang',$codition_search,$content,array());
    }
              
    //     if (isset($_POST['search'])) {
    //         $codition_search=$_POST['codition_search'];
    //         $content=$_POST['content'];
    //         $khachhang=$db->get_like('khachhang',$codition_search,$content,array('id_kh'=>$value['id_kh']));
    //     }else{ $donhang=$db->get('donhang',array());

    //   }
    require_once('View_web/v_donhang.php');
    }
   else{
       //Nếu chưa đăng nhập thì sẽ cho người dùng về trang login
       header('location: ?controller=login');
   } 

   
?>