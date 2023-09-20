<?php
$method = $_GET['method'];
$id = $_GET['id'];
$ful_giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user']));
if (isset($_SESSION['ss_user'])) {
    
    $size=$_GET['size'];
    $giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user'],'id_sanpham'=>$id,'size'=>$size));
    switch ($method) {
        case 'giam':
            foreach ($giohang as $key => $value) {
                $sanpham=$db->get('sanpham',array('id_sanpham'=>$giohang[0]['id_sanpham']));
                $db->update('giohang',array(
                'soluong'=>$value['soluong']-1,
                'tong'=>$giohang[0]['tong']-$sanpham[0]['gia']
                ),array('size'=>$size,'id_sanpham'=>$id));};
                if ($value['soluong']<2) {
                    $db->delete('giohang',array(
                        'id_sanpham'=>$id,
                        'id_taikhoan'=>$_SESSION['ss_user'],
                        'size'=>$size
                    ));
                }
                header('location: ?controller=cart');
            break;
        case 'tang':
            foreach ($giohang as $key => $value) {
                    $sanpham=$db->get('sanpham',array('id_sanpham'=>$giohang[0]['id_sanpham']));
                    $db->update('giohang',array(
                    'soluong'=>$value['soluong']+1,
                    'tong'=>$giohang[0]['tong']+$sanpham[0]['gia']
                ),array('size'=>$size,'id_sanpham'=>$id));};
                header('location: ?controller=cart');
                break;
        case 'xoa':
            $db->delete('giohang',array(
                'id_sanpham'=>$id,
                'id_taikhoan'=>$_SESSION['ss_user'],
                'size'=>$size
            ));
            header('location: ?controller=cart');
            break;
        
        case 'xoatoanbo':
            $db->delete('giohang',array(
                'id_taikhoan'=>$_SESSION['ss_user']              
            ));
            header('location: ?controller=cart');
          
            break;
        default:
           
            break;
    }
}else{
    switch ($method) {
        case 'giam':
            $_SESSION['cart'][$id]['sl']-=1;
            if($_SESSION['cart'][$id]['sl']==0){
                unset($_SESSION['cart'][$id]);       
            }
             header('location: ?controller=cart');
            break;

        case 'tang':
            $_SESSION['cart'][$id]['sl']+=1;
            header('location: ?controller=cart');
            break;

        case 'xoa':
            unset($_SESSION['cart'][$id]);
            
            if(empty($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            header('location: ?controller=cart');
            break;
        
        case 'xoatoanbo':
            unset($_SESSION['cart']);
            if(empty($_SESSION['cart'])){
                unset($_POST['btn_xoatoanbo']);
            }
            header('location: ?controller=cart');
            break;
        default:
            header('location: ?controller=home');
            break;
    }
    
}
?>