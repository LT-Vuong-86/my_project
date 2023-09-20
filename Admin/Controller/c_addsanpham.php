<?php
if(isset($_SESSION['ss_admin'])){
    $user=$db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));

    if(($user[0]['vaitro']=='admin') || ($user[0]['vaitro']=='manager')){
        if(isset($_POST['btn_addsanpham'])){
            $id_dm = $_POST['id_dm'];
            $tensanpham = $_POST['tensanpham'];
            $gia = $_POST['gia'];
            $date_oder = date("d/m/y");
            $xuatxu = $_POST['xuatxu'];
            $uploadedFile_main = $_FILES['img_main'];
            $imglink = $db->uploadfile($uploadedFile_main);
            $uploadedFile_extra=$_FILES['anh_phu'];
            $uploadedFile_extrar=$_FILES['anh_phu']['name'];
             $imglink_extra = $db->uploadfile($uploadedFile_extra);
           $slmasp=$_POST['slmasp'];
           $productName = [];
           $productSizeS=[];
           $productSizeM=[];
           $productSizeL=[];
           $productSizeXL=[];
           $productSizeXXL=[];
           $anh_phu_number=[];
           $anh_phu_number=$_FILES["anh_phu"];
        //    print_r($uploadedFile_extrar);
        //     echo "<br>";
        //     print_r($uploadedFile_extrar[1]);
        //     die;
            global $tonkho;
            for ($i = 1; $i <= $slmasp; $i++) {
                
                $productName[] = $_POST["productName$i"];
                $productSizeS[] = $_POST["productSizeS$i"];
                $productSizeM[] = $_POST["productSizeM$i"];
                $productSizeL[] = $_POST["productSizeL$i"];
                $productSizeXL[] = $_POST["productSizeXL$i"];
                $productSizeXXL[] = $_POST["productSizeXXL$i"];
            }
            for($i = 1; $i <= $slmasp; $i++){
                $tonkho+=$productSizeS[$i]+$productSizeM[$i]+$productSizeL[$i]+$productSizeXL[$i]+$productSizeXXL[$i];
            }
            // print_r(pathinfo('1.2.jpg'));
            // die;
            $daban=0;
            $loi = array();
            $anhphu=0;
            $anhphu1=$db->get('sanpham',array());
            foreach ($anhphu1 as $key => $value) {
                $anhphu = $value['id_sanpham']+1;
            }
            // var_dump($anhphu);
            // die;
            if($id_dm == ''){
                $loi['id_dm'] = 'Danh mục không được để trống';
            }

            if($tensanpham == ''){
                $loi['tensanpham'] = 'Tên sản phẩm không được để trống';
            }

            if($gia == ''){
                $loi['gia'] = 'Giá không được để trống';
            }

            if($xuatxu == ''){
                $loi['xuatxu'] = 'Xuất xứ không được để trống';
            }

            if($daban == ''){
                $loi['daban'] = 'Đã bán không được để trống';
            }

            if(!$loi){
                $db->insert('sanpham',array(
                    'tensanpham'=>$tensanpham,
                    'tonkho'=>$tonkho,
                    'gia'=>$gia,
                    'anh_chinh'=>$imglink,
                    'xuatxu'=>$xuatxu, 
                    'id_danhmuc'=>$id_dm,
                    'daban'=>$daban,
                    'ngaytao'=>$date_oder,
                    'nguoitao'=>$user[0]['username']
                ));    
                $anhphu_idsp=$db->insert_id();
                
       
            for ($i=0; $i < $slmasp; $i++) {
                 $db->insert('loai_sp',array( 
                    'id_sanpham '=>$anhphu_idsp, 
                    'anh_phu'=>$uploadedFile_extrar[$i],
                    'type_name'=>$productName[$i], 
                    's'=>$productSizeS[$i],
                    'm'=>$productSizeM[$i],
                    'l'=>$productSizeL[$i],
                    'xl'=>$productSizeXL[$i], 
                    'xxl'=>$productSizeXXL[$i]
                    ));
            }
                    
                header('location: ?controller=sanpham');
            }
        }
    }else{
    header('location: ?controller=login');
}
}
    require 'View_web/v_addsanpham.php';
?>