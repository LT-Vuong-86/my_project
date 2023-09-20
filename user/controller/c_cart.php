<?php
if(isset($_SESSION['ss_user'] )){
    $giohang = $db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user']));
}elseif( isset($_SESSION['cart'])){

}else{
   
    echo "<script>alert('Chức năng này cần đăng nhập')</script>";
    echo "<script>window.location.href = '?controller=home';</script>";
}

    require ("view/v_cart.php");
   
?>