<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));

    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        if(isset($_POST['btn_adddonhang'])){
            $ten = $_POST['ten'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['diachi'];
            $slmasp = $_POST['slmasp'];
            $tong=$_POST['tong'];
            $loai_sp=$_POST['loai_sp'];
            $size_name=$_POST['size'];
            $ghichu=$_POST['ghichu'];
            $date_oder = date("d/m/y");
            $names = [];
            $soluong=[];
            for ($i = 0; $i < $slmasp; $i++) {
             $names[] = $_POST["masp$i"];
             $soluong[]=$_POST["soluong$i"];
            }
            // $id_kh=0;
            // $khachhang=$db->get('khachhang',array());
            // foreach ($khachhang as $key => $value) {
            //     $id_kh = $value['id_kh']+1;
            // }
            // $id_dh=0;
            // $donhang=$db->get('donhang',array());
            // foreach ($donhang as $key => $value) {
            //     $id_dh = $value['id_donhang']+1;
            // }
            $loi=[];
            if($loai_sp == ''){
                $loi['loai_sp'] = 'Mục không được để trống';
            }
            if($size_name == ''){
                $loi['size'] = 'Mục không được để trống';
            }
            if($ten == ''){
                $loi['ten'] = 'Danh mục không được để trống';
            }

            if($sdt == ''){
                $loi['sdt'] = 'Tên sản phẩm không được để trống';
            }

            if($diachi == ''){
                $loi['diachi'] = 'Số lượng sản phẩm không được để trống';
            }

            if($slmasp == ''){
                $loi['slmasp'] = 'Giá không được để trống';
            }

            if($tong == ''){
                $loi['tong'] = 'Xuất xứ không được để trống';
            }
            
            if($ghichu == ''){
                $loi['ghichu'] = 'Đã bán không được để trống';
            }           
            if(!$loi){
                $db->insert('khachhang',array(                    
                    'username'=>$ten,
                    'sdt'=>$sdt,
                    'diachi'=>$diachi                   
                ));    
                $id_kh=$db->insert_id();
                $db->insert('donhang',array(                    
                    'id_kh'=>$id_kh,
                    'tong'=>$tong,
                    "id_tinhtrang"=>1              
                )); 
                $id_dh=$db->insert_id();
                for ($i=0; $i < $slmasp; $i++) { 
                                      
                $db->insert('ctdonhang',array(
                    'id_donhang'=>$id_dh,
                    'id_sanpham'=>$names[$i],
                    'size'=>$size_name,
                    'loai_sp'=>$loai_sp,
                    'soluongsp'=>$soluong[$i],
                    'ghichu'=>$ghichu,
                    'ngaydat'=>$date_oder
                ));
            }
                header('location: ?controller=donhang');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_adddonhang.php';
?>