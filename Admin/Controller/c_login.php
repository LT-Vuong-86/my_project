<?php
    if(isset($_SESSION['ss_admin'])){
        header('location: ?controller=trangchu');
    }
    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $loi = array();
        if($username == ''){
            $loi['username'] = 'Username không được để trống';
        }
        if($password == ''){
            $loi['password'] = 'Password không được để trống';
        }
        if(!$loi){
            $password=md5($_POST['password']);          
            $admin = $db->get('taikhoan', array('username'=>$username));
            if(empty($admin)){
                $loi['username'] = 'Tên đăng nhập không tồn tại';
            }else{
                if($password!=$admin[0]['pass']){
                    $loi['password'] = 'Sai mật khẩu';
                }
                if ($admin[0]['vaitro']=='user') {
                    $loi['admin']='bạn không có quyền';
                }
            }
        }
        if(!$loi){
            
            $_SESSION['ss_admin'] = $admin[0]['id'];    
            header('location: ?controller=trangchu');
        }
    }
    require('View_web/v_login.php');
?>