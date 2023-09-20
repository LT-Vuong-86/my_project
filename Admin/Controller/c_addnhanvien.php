<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));

    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        if ($user[0]['vaitro']=='manager') {
            $vaitro='user';
        }else{
            $vaitro=null;
        }
        $email=0;
        if(isset($_POST['btn_addnhanvien'])){
            $username = $_POST['username'];
            $full_name = $_POST['full_name'];
            $password = $_POST['pass'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            
            $vaitro = $_POST['vaitro'];
            $diachi = $_POST['diachi'];

            $loi = array();
            $password=md5($_POST['pass']);          
            if (!preg_match('/^[a-zA-Z0-9-]+$/', $username)) {
                $loi['username'] = 'Tài khoản cần viết liền ko dấu';
              }
            if($username == ''){
                $loi['username'] = 'Tên đăng nhập không được để trống';
            }

            if($full_name == ''){
                $loi['full_name'] = 'Tên đầy đủ không được để trống';
            }

            if($password == ''){
                $loi['pass'] = 'Mật khẩu không được để trống';
            }

            if($sdt == ''){
                $loi['sdt'] = 'SĐT không được để trống';
            }

            if($vaitro == ''){
                $loi['vaitro'] = 'Vai trò không được để trống';
            }
            
            if($diachi == ''){
                $loi['diachi'] = 'Địa chỉ không được để trống';
            }
            if(!$loi){
                $db->insert('taikhoan',array(
                    'username'=>$username,
                    'full_name'=>$full_name,
                    'pass'=>$password,
                    'email'=>$email,
                    'sdt'=>$sdt,
                    'vaitro'=>$vaitro,
                    'diachi'=>$diachi
                ));
                // $id_donhang=$db->insert_id();
                // echo  $id_donhang ;
                // echo die;
                header('location: ?controller=taikhoan');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_addnhanvien.php'
?>
