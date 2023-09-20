<?php

    if(isset($_POST['btn_signup'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sdt = $_POST['sdt'];
        $email=0;
        $email = $_POST['email'];
        $vaitro = $_POST['vaitro'];
        $diachi = $_POST['diachi'];
        $date = date('d/m/y');
        $mk=md5($password);
        $taikhoan=$db->get('taikhoan',array('username'=> $username));
        if (empty($taikhoan)) {
        if(!empty($full_name) &&!empty($username) && !empty($password) && !empty($sdt) && 
        !empty($diachi)){
            $db->insert('taikhoan', array(
                'full_name'=>$full_name,
                'username'=>$username,
                'pass'=>$mk,
                'email'=>$email,
                'sdt'=>$sdt,
                'vaitro'=>$vaitro,
                'diachi'=>$diachi,
                'ngaytao'=>$date
            ));
  
            echo("<script>alert('Đăng ký thành công')</script>");
            echo "<script>window.location.href = '?controller=login';</script>";
           
        }else{
            echo 'Bạn cần nhập đầy đủ thông tin trước';
        }}else {
            echo 'Tên tài khoản đã tồn tại';
        }
    }
    require 'view/v_signup.php';
?>