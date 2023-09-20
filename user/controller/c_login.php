<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=home');
    }
    if(isset($_POST['btn_log'])){
     
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $loi = array();
        if($username == ''){
            $loi['username'] = 'Tên đăng nhập không được để trống';
        }
        if($password == ''){
            $loi['pass'] = 'Mật khẩu không được để trống';
        }
       
        if(!$loi){
            $password=md5($_POST['pass']);          
            $user = $db->get('taikhoan', array('username'=>$username));

            if (!empty($user)) {    
                if ($user[0]['vaitro']=="user") {  
                    if(!empty($vaitro['username'])){
                        $loi['username'] = 'Tên đăng nhập không tồn tại';
                    }else{
                        if($password != $user[0]['pass']) {
                            $loi['pass'] = 'Sai mật khẩu hoặc tài khoản  ';
                        }
                    }
                }else {
                    $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
                }
               
            }else{
                $loi['pass'] = 'Sai mật khẩu hoặc tài khoản';
                }        
        }
        
        if(!$loi){
            $_SESSION['ss_user'] = $user[0]['id'];
            $_SESSION['ss_name'] = $user[0]['full_name'];
            header('location: ?controller=home');
        }
    }
    require 'view/v_login.php';
?>