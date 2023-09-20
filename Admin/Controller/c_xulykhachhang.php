<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){

        $method = $_GET['method'];
        $id = $_GET['id'];
        switch ($method) {
            case 'xoa':

                $id = $_GET['id'];
                $db->delete('khachhang', array('id_kh'=>$id));
               
                header('Location: ?controller=khachhang');
                break;

            case 'sua':
                $id = $_GET['id'];
                $data_nhanvien = $db->get('khachhang', array('id_kh'=>$id));
                if(isset($_POST['btn_suanhanvien'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $sdt = $_POST['sdt'];
                    $diachi = $_POST['diachi'];

                    $loi = array();
                    if($username == ''){
                        $loi['username'] = 'Tên đăng nhập không được để trống';
                    }


                    if($email == ''){
                        $loi['email'] = 'Email không được để trống';
                    }

                    if($sdt == ''){
                        $loi['sdt'] = 'SĐT không được để trống';
                    }

                    
                    if($diachi == ''){
                        $loi['diachi'] = 'Địa chỉ không được để trống';
                    }
                    if(!$loi){
                        $db->update('khachhang',array(
                            'username'=>$username,
                            'email'=>$email,
                            'sdt'=>$sdt,
                            'diachi'=>$diachi
                        ),array('id_kh'=>$id));
                       
                        header('location: ?controller=khachhang');
                    }
                }
                require 'View_web/v_suakhachhang.php';
                break;

            default:

            break;    
        }    
        
    }            
    else
    {
        echo '<script type="text/javascript">alert("Bạn không có quyền hạn");           
        </script>';
        header('location: ?controller=khachhang');
    }
}
?>

