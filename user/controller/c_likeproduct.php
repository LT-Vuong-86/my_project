<?php
if (isset($_SESSION['ss_user'])) {
    $sanphamlikeproduct=$db->get_join(array(
    "tensanpham", "gia", "anh_chinh", "daban",'sanpham.id_sanpham'
    ), 'sanpham','danhsachyeuthich', 'JOIN', 'danhsachyeuthich.id_sanpham = sanpham.id_sanpham',
    array(),array());
if (isset($_GET['method'])) {
    if (isset($_GET['id'])) {
        global $id_sanpham;
        $id_sanpham=$_GET['id'];
    }
    $method=$_GET['method'];
    switch ($method) {
        case 'xoa':
            $db->delete('danhsachyeuthich',array(
                'id_sanpham'=>$id_sanpham,
                'id_taikhoan'=>$_SESSION['ss_user']
            ));
            echo "<script>window.location.href = '?controller=likeproduct';</script>";
            break;
            case 'xoatat':
                $db->delete('danhsachyeuthich',array(
                    'id_taikhoan'=>$_SESSION['ss_user']
                ));
                echo "<script>window.location.href = '?controller=likeproduct';</script>";
            break;
        default:
            break;
    }

}
}
require "view/v_likeproduct.php"
?>