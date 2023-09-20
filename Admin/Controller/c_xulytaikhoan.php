<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
    if(($user[0]['vaitro']=='admin') ){

        $method = $_GET['method'];
        $id = $_GET['id'];
        switch ($method) {
            case 'xoa':
                $id = $_GET['id'];
                $db->delete('taikhoan', array('id'=>$id));
                header('Location: ?controller=taikhoan');
                break;

            case 'sua':
                $id = $_GET['id'];
                $data_nhanvien = $db->get('taikhoan', array('id'=>$id));
                if(isset($_POST['btn_suanhanvien'])){
                    $username = $_POST['username'];
                    $full_name = $_POST['full_name'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $vaitro = $_POST['vaitro'];
                    $diachi = $_POST['diachi'];

                    $loi = array();
                    if($username == ''){
                        $loi['username'] = 'Tên đăng nhập không được để trống';
                    }

                    if($full_name == ''){
                        $loi['full_name'] = 'Tên đầy đủ không được để trống';
                    }

                    if($email == ''){
                        $loi['email'] = 'Email không được để trống';
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
                        $db->update('taikhoan',array(
                            'username'=>$username,
                            'full_name'=>$full_name,
                            'email'=>$email,
                            'sdt'=>$sdt,
                            'vaitro'=>$vaitro,
                            'diachi'=>$diachi
                        ),array('id'=>$id));
                       
                        header('location: ?controller=taikhoan');
                    }
                }
                require 'View_web/v_suataikhoan.php';
                break;

            default:

            break;    
        }    
        
    }            
    else
    {
        echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
        </script>';
        header('location: ?controller=taikhoan');
    }
}
?>

