<?php
    //Lấy id trên thanh url
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    
    $rate_star=$db->get('rate_sp',array('id_sanpham'=>$id));
    if ($rate_star) {    
   $rate=[];
   foreach ($rate_star as $value) {
    $rate[]=$value['rate_rating'];
   }
   if ($rate != ""){
    $count_rate=0;
    $count_rate=count($rate);
    $rating=ceil(array_sum($rate)/$count_rate) ;
   }
}

    //Lấy dữ liệu theo id tương ứng đã lấy được
    $product = $db->get('sanpham',array('id_sanpham'=>$id));
    if ($product != "") {
        $description = nl2br($product[0]["nd_sp"]);
    }
     
    $anhphu1=$db->get('loai_sp', array('id_sanpham'=>$id));
    $size_name='';
    $loai_sp='';
    if (isset($_POST['themgiohang'])) {
    $ten=$product[0]['tensanpham'];
    if (isset($_POST['size_name'])) {
        $size_name=$_POST['size_name'];
    }
    if (isset($_POST['loai_sp'])) {
    $loai_sp=$_POST['loai_sp'];
    }
    $gia=$product[0]['gia'];
    if (isset($_POST['loai_sp'])) {
    $sl=$_POST['sl'];
    
    $tong=$gia*$sl;
    }
    $loi = array();
   if($size_name == ''){
            $loi['size_name'] = 'vui lòng chọn size';
        }
    if($loai_sp == ''){
            $loi['loai_sp'] = 'vui lòng chọn loại sp';
   }
   if (!$loi) {
    if (isset($_SESSION['ss_user'])) {
        unset($_SESSION['cart']);
        $giohang=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user'],'id_sanpham'=>$id,'size'=>$size_name));
         if (!empty($giohang)) {   
         foreach ($giohang as $key => $value) {
             $db->update('giohang',array(
                 'soluong'=>$value['soluong']+$sl,
                 'tong'=>$value['tong']+$tong
             ),array('id_taikhoan'=>$_SESSION['ss_user'],'size'=>$size_name,'id_sanpham'=>$id));};
           
            }else {
        $db->insert('giohang',array(
            'id_taikhoan'=>$_SESSION['ss_user'],
            'id_sanpham'=>$id,
            'loai_sp'=>$loai_sp,
            'size'=>$size_name,
            'soluong'=>$sl,
            'tong'=>$tong
        ));}
    }else{
        echo "<script>alert('Chức năng này cần đăng nhập')</script>";
    }
  
       
    }
    
    
     }
     if (isset($_POST['muangay'])) {
        $ten=$product[0]['tensanpham'];
        if (isset($_POST['size_name'])) {
            $size_name=$_POST['size_name'];
        }
        if (isset($_POST['loai_sp'])) {
        $loai_sp=$_POST['loai_sp'];
        }
        $gia=$product[0]['gia'];
        if (isset($_POST['loai_sp'])) {
        $sl=$_POST['sl'];
        
        $tong=$gia*$sl;
        }
        $loi = array();
       if($size_name == ''){
                $loi['size_name'] = 'vui lòng chọn size';
            }
        if($loai_sp == ''){
                $loi['loai_sp'] = 'vui lòng chọn loại sp';
       }
       if (!$loi) {
        
       
       if (isset($_SESSION['ss_user'])) {   
        unset($_SESSION['cart']);
       $giohang1=$db->get('giohang',array('id_taikhoan'=>$_SESSION['ss_user'],'id_sanpham'=>$id,'size'=>$size_name));
        if (!empty($giohang1)) { 
        foreach ($giohang1 as $key => $value) {
            $db->update('giohang',array(
                'soluong'=>$value['soluong']+$sl,
                'tong'=>$value['tong']+$tong
            ),array('id_taikhoan'=>$_SESSION['ss_user'],'size'=>$size_name,'id_sanpham'=>$id));};
           header("location: ?controller=checkout");
           }else {
            $db->insert('giohang',array(
                'id_taikhoan'=>$_SESSION['ss_user'],
                'id_sanpham'=>$id,
                'loai_sp'=>$loai_sp,
                'size'=>$size_name,
                'soluong'=>$sl,
                'tong'=>$tong
            ));
           header("location: ?controller=checkout");
         }
         
       
       
      
    }else{
       
        if ($_SESSION['cart'][$id]['size_name'] == $size_name && $_SESSION['cart'][$id]['loai_sp'] == $loai_sp) {
            // Increment the quantity
           
            //$_SESSION['cart'][$id]['sl'] += $sl;
          } else if ($_SESSION['cart'][$id]['id_sanpham'] == $id) {
            // Add the product to the cart
             $_SESSION['cart'][$id]['loai_sp'] = $loai_sp;
            $_SESSION['cart'][$id]['size_name'] = $size_name;
            $_SESSION['cart'][$id]['sl'] = $sl;
          
          } else {
            // Add the product to the cart
            $_SESSION['cart'][$id]['id_sanpham'] = $id;
            $_SESSION['cart'][$id]['tensanpham'] = $product[0]['tensanpham'];
            $_SESSION['cart'][$id]['gia'] = $product[0]['gia'];
            $_SESSION['cart'][$id]['sl'] = $sl;
            $_SESSION['cart'][$id]['anh_chinh'] = $product[0]['anh_chinh'];
            $_SESSION['cart'][$id]['loai_sp'] = $loai_sp;
            $_SESSION['cart'][$id]['size_name'] = $size_name;
            $_SESSION['cart'] [$id]['tong'] = $tong;
          }
          
          header("location: ?controller=checkout");
          
    }

    }
     }
     if (isset($_POST['yeuthich'])) {
     if (isset($_SESSION['ss_user'])) {
        $id_sanpham=$db->get('danhsachyeuthich',array('id_sanpham'=>$id,'id_taikhoan'=>$_SESSION['ss_user']));
if (empty($id_sanpham)) {
        $db->insert('danhsachyeuthich',array(
            'id_taikhoan'=>$_SESSION['ss_user'],
            'id_sanpham'=>$id            
        ));
        echo "<script>alert('Đã thêm vào danh sách yêu thích')</script>";
        echo "<script>window.location.href = '?controller=likeproduct';</script>";
     }
     else {
        echo "<script>alert('Sản phẩm đã được thêm trước đó')</script>";
     }
    }else {
        echo "<script>alert('Chức năng này cần đăng nhập')</script>";
     }
    }
    // $loai_sp=$_POST['jehvd'];
                          
        // $size_phu = $_POST['size_name'];  
   
    }
    require_once ("view/v_product-detail.php");
?>
