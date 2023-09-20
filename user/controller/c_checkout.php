<?php
if(isset($_SESSION['ss_user'])){
    $khachhang = $db->get('taikhoan', array('id'=>$_SESSION['ss_user']));
    $giohang = $db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user']));
    $date_oder = date("d/m/y");
    if(isset($_POST['btn_thanhtoan'])){
    
        if (isset($_POST['ghichu'])) {
            $ghichu = $_POST['ghichu'];
        }
        if (isset($_POST['full_name'])) {
            $full_name = $_POST['full_name'];
        }
        if (isset($_POST['email'])) {
        $email = $_POST['email'];
        }
        if (isset($_POST['sdt'])) {
        $sdt = $_POST['sdt'];
        }
        if (isset($_POST['diachi'])) {
        $diachi = $_POST['diachi'];
        }
        $loi = array();
        if($full_name == ''){
            $loi['full_name'] = 'vui lòng điền tên';
        }
        global $sl;
        if($sdt == ''){
            $loi['sdt'] = 'vui lòng chọn sdt';
        }
        if($diachi == ''){
            $loi['diachi'] = 'vui lòng chọn địa chỉ';
        }
        if(!$loi){
            
            $db->insert('khachhang',array(                    
                'username'=>$full_name,
                'sdt'=>$sdt,
                'diachi'=>$diachi ,
                'email'=>$email                  
            ));    
            $id_kh=$db->insert_id();
            $tong = 0;
            foreach ($giohang as $key => $value) { 
                
                $tong+=$value['tong'];
            }
            $db->insert('donhang',array(                    
                'id_kh'=>$id_kh,
                'tong'=>$tong,
                "id_tinhtrang"=>1              
            )); 
            
        $id_dh=$db->insert_id();
        foreach ($giohang as $key => $value) {
            global $sizelsp,$loai_sp;
            $sizelsp=$value['size'];
            $loai_sp=$db->get('loai_sp',array('id_sanpham'=>$value['id_sanpham'],
            $sizelsp => $value['size'],'type_name'=> $value['loai_sp']));
               
            $db->insert('ctdonhang',array(
                'id_donhang'=>$id_dh,
                'id_sanpham'=>$value['id_sanpham'],
                'size'=> $value['size'],
                'loai_sp'=> $value['loai_sp'],
                'soluongsp'=>$value['soluong'],
                'ghichu'=>$ghichu,
                'ngaydat'=>$date_oder
            ));
            
            // if ($loai_sp[0][$sizelsp] > $value['soluong']) {
                
            // }else {
            //     echo "<script>alert('sản phẩm đã hết hàng')</script>";
            //     header('location: ?controller=home');
            // }
            // $db->update('loai_sp',array(
            //     $value['size']=>$loai_sp[0][$sizelsp]-$value['soluong']
            //     ), array(
            //     'id_sanpham'=>$value['id_sanpham'],$value['size']=>$value['size'],'type_name'=> $value['loai_sp']));
            
            // $sl+=$value['soluong'];
            // $sanpham=$db->get('sanpham',array('id_sanpham'=>$value['id_sanpham']));
            // $db->update('sanpham',array(
            //     'tonkho'=>$sanpham[0]['tonkho']-$sl
            // ),array('id_sanpham'=>$value['id_sanpham']));
        }

        $db->delete('giohang',array(
            'id_taikhoan'=>$_SESSION['ss_user']              
        ));
        echo "<script>alert('Đặt hàng thành công')</script>";
        
        echo "<script>window.location.href = '?controller=home';</script>";
        }
      
    }
}else{
    $tongtiensp = 0;
    $tongsl = 0;
    $tongtien = 0;
    $date_oder = date("d/m/y");
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart'] as $key => $value){
            $tongsl+=$value['sl'];
            $tongtiensp+=$value['sl']*$value['gia'];
            $tongtien = $tongtiensp;
        }}
        $ghichu="";

if(isset($_POST['btn_thanhtoan'])){
    
    if (isset($_POST['ghichu'])) {
        $ghichu = $_POST['ghichu'];
    }
    if (isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
    }
    if (isset($_POST['email'])) {
    $email = $_POST['email'];
    }
    if (isset($_POST['sdt'])) {
    $sdt = $_POST['sdt'];
    }
    if (isset($_POST['diachi'])) {
    $diachi = $_POST['diachi'];
    }
    $loi = array();
    if($full_name == ''){
        $loi['full_name'] = 'vui lòng điền tên';
    }
    global $sl;
    
    if($sdt == ''){
        $loi['sdt'] = 'vui lòng chọn sdt';
    }
    if($diachi == ''){
        $loi['diachi'] = 'vui lòng chọn địa chỉ';
    }
if (isset($_SESSION['cart'])) {
    

    if(!$loi){
        
        $db->insert('khachhang',array(                    
            'username'=>$full_name,
            'sdt'=>$sdt,
            'diachi'=>$diachi ,
            'email'=>$email                  
        ));    
        $id_kh=$db->insert_id();
        $db->insert('donhang',array(                    
            'id_kh'=>$id_kh,
            'tong'=>$tongtien,
            "id_tinhtrang"=>1              
        )); 
    
    $id_dh=$db->insert_id();
    foreach ($_SESSION['cart'] as $key => $value) {

            $sizelsp=$value['size_name'];
            $loai_sp=$db->get('loai_sp',array('id_sanpham'=>$value['id_sanpham'],
            $sizelsp => $value['size_name'],'type_name'=> $value['loai_sp']));
           
       
        $db->insert('ctdonhang',array(
            'id_donhang'=>$id_dh,
            'id_sanpham'=>$value['id_sanpham'],
            'size'=> $value['size_name'],
            'loai_sp'=> $value['loai_sp'],
            'soluongsp'=>$value['sl'],
            'ghichu'=>$ghichu,
            'ngaydat'=>$date_oder
        ));
        // $db->update('loai_sp',array(
        //     $value['size_name']=>$loai_sp[0][$sizelsp]-$value['sl']
        // ),array('id_sanpham'=>$value['id_sanpham']));
        
        // $sl+=$value['sl'];
        // $sanpham=$db->get('sanpham',array('id_sanpham'=>$value['id_sanpham']));
        // $db->update('sanpham', array('tonkho'=>$sanpham[0]['tonkho']-$sl), 
        // array('id_sanpham'=>$value['id_sanpham']));
    }
   
   
    echo "<script>alert('Đặt hàng thành công')</script>";
    unset($_SESSION['cart']);
    echo "<script>window.location.href = '?controller=home';</script>";
    }
}else {
    echo "<script>alert('Bạn chưa có đơn hàng nào cả')</script>";
}
}
}
    require "view/v_checkout.php";
?>