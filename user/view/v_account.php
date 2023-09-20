<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <style>
        .all_submit_form{
            margin-left: -25px;
        }

        .body_acount_right{
            background-color: rgb(255, 255, 255);
            max-height: 400px;
            overflow: scroll;
            border-left: 15px solid whitesmoke;
            border-top: 15px solid whitesmoke;
            border-radius: 25px;
            border-right: 15px solid whitesmoke;
            border-bottom: 15px solid whitesmoke;
        }

        .body_acount_right form li {
            margin-top: 20px;
            width: 200px;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        input[type="radio"] {
  display: none;
}



    </style>
</head><!--/head-->

<body>
	<header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="?controller=home"><img src="../images/home/logo.png" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                                <li><a href=""><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><a href="?controller=logout"><i class="fa fa-lock"></i>Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <!-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div> -->
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li>
                                    <a href="?controller=home" class="active">Trang chủ</a>
                                    <p>Tài khoản</p>
                                </li>                                    
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
    <section id="body_account">
        
        <div class="container">
            <div class="row body_account_row col-xs-12 col-sm-12">
                <div class="body_acount_left col-xs-12 col-md-3">
                    <li class="body_acount_left_taikhoan"  id="click_menu"> 
                        <h3 class="col-sm-6 col-xs-6">Tên tài khoản</h3 >
                        <h1  class="col-sm-6 col-xs-6 click_none_html" >&dArr;</h1>
                    </li>
                    <div id="click_none_menu" class="col-sm-12 col-xs-12">
                        <li class="tablinks"  onclick="openCity('thongtintaikhoan')" id="defaultOpen">Thông tin tài khoản</li>
                        <li class="tablinks" onclick="openCity('quanlidonhang')" >Quản lý đơn hàng</li>
                        <li class="tablinks" onclick="openCity('sanphamdamua')" >Sản phẩm đã mua</li>
                    </div>
                </div>

                <div id="thongtintaikhoan" class="body_acount_right col-xs-12 col-sm-12 col-md-12 tabcontent">
                    <form action="" method="post">
                        <div class="body_acount_right_form_left col-xs-12 ">
                            <li>Tên đầy đủ:
                                <td><input type="text"  disabled  value="<?php echo $account[0]['full_name']?>"></td>
                            </li>
                            <li>Tên người dùng:
                                <td><input type="text"  disabled  value="<?php echo $account[0]['username']?>"></td>
                            </li>
                            <li>Số điện thoại:
                               <td><input type="text"  disabled  value="<?php echo $account[0]['sdt']?>"></td> 
                            </li>
                            <li>Email:
                              <td><input type="text"  disabled  value="<?php echo $account[0]['email']?>"></td>
                            </li>
                            <div class="all_submit_form">
                                <input id="click_show_taikhoan" class="submit_form"  type="button" value="Cập nhập tại khoản">
                                <!-- <input class="submit_form" type="submit" value="Đổi mật khẩu"> -->
                            </div>
                            
                        </div>
                        <div class="body_acount_right_form_rigt col-xs-12">
                            <li>Địa chỉ:
                        <td><textarea class="col-xs-12" disabled cols="200" rows="4"><?php echo $account[0]['diachi']?></textarea></td>
                        </li> </div>
                        
                    </form>
                   
                </div>
               
                <div id="quanlidonhang" class="tabcontent body_acount_right col-xs-12 col-md-12 col-md-12 " >
                    <h3>Quản lý đơn hàng</h3>
                    <form action="" method="post">
                    <table class="col-xs-12 col-md-12">
                        <tr>
                            <th>Mã đơn hàng </th>
                            <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Size</th>
                            <th>loại sp</th>
                            <th>Ngày mua</th>
                            <th>Trạng thái đơn hàng</th>
                            <th>Tổng tiền</th>
                        </tr>
                        <?php
                        $i=1;
                        foreach ($khachhang as $key => $value) {
                            if (isset($value['id_kh'])) {
                                $donhang=$db->get('donhang',array('id_kh'=>$value['id_kh']));
                            }
                         if (isset($donhang)) {
                       foreach ($donhang as $key => $value) {
                        if ($value['id_tinhtrang']<3) {
                        $ctdonhang=$db->get('ctdonhang',array('id_donhang'=>$value['id_donhang']));
                        foreach($ctdonhang as $key => $value1){
                            $sanpham=$db->get('sanpham',array('id_sanpham'=>$value1['id_sanpham']));
                        
                        $tinhtrang=$db->get('tinhtrang_dh',array('id_tinhtrang'=>$value['id_tinhtrang']));
                        ?>
                        <tr class="item_table">
                            <td><?php echo $value['id_donhang']?> </td>
                            <td><img src="../images/sanpham/<?php echo $sanpham[0]['anh_chinh']?>" alt=""></td>
                            <td class="col-xs-3 col-md-3">
                                <?php echo $sanpham[0]['tensanpham']?>
                            </td>
                            <td class="col-xs-2 col-md-2"><?php echo $value1['size'] ?></td>
                            <td class="col-xs-2 col-md-2"><?php echo $value1['loai_sp'] ?></td>
                            <td class="col-xs-2 col-md-2"><?php echo $value1['ngaydat'] ?></td>
                            <td class="col-xs-3 col-md-3"><?php echo $tinhtrang[0]['tinhtrang'] ?>
                            <a class="status" href="?controller=account&method=huy&id=<?php echo $value['id_donhang']?>">
                                   <?php if ($value['id_tinhtrang']==1) {
                                            echo "<input type='button' style='background-color:red ; cursor: pointer;' value='Hủy'>";                                     
                                        }
                                        
                                      ?>
                                      </a>
                                  
                        </td>
                            <td class="col-xs-2 col-md-2"><?php echo $sanpham[0]['gia']*$value1['soluongsp'] ?></td>
                        </tr>
                        <?php  }   }}}
                    } ?>
                    </table>
                    </form>
                </div>

                <div id="sanphamdamua" class="tabcontent body_acount_right col-xs-12 col-md-12 col-md-12 " >
                    <h3>sản phẩm đã mua</h3>
                    <table class="col-xs-12 col-md-12">
                        <tr >

                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại sp</th>
                            <th>Kích cỡ</th>
                            <th>Số lượng sp</th>
                            <th>Tổng</th>
                            <th>Hoạt động</th>
                        </tr>
                        <?php
                        if (isset($donhang)) {
                            foreach ($khachhang as $key => $valuess) {
                                if (isset($valuess['id_kh'])) {
                                    $donhang=$db->get('donhang',array('id_kh'=>$valuess['id_kh']));
                                
                            foreach ($donhang as $key => $value) {  
                                $ctdh= $db->get('ctdonhang',array('id_donhang'=>$value['id_donhang']));
                               
                               foreach ($ctdh as $key => $value1) {
                                // echo "<pre>";
                                // var_dump(  $value1['ghichu']);
                        if ($value['id_tinhtrang']>=3 ) {                        
                             $sanpham=$db->get('sanpham',array('id_sanpham'=>$value1['id_sanpham']));
                                $tinhtrang=$db->get('tinhtrang_dh',array('id_tinhtrang'=>$value['id_tinhtrang']));
                               
                        ?>
                        <tr class="item_table">
                            <td><img src="../images/sanpham/<?php echo $sanpham[0]['anh_chinh']?>" alt=""></td>
                            <td class="col-xs-4 col-md-3">
                                <li><?php echo $sanpham[0]['tensanpham']?></li>
                                
                            </td>
                            <td><?php echo $value1['loai_sp'];  ?></td>
                            <td><?php echo $value1['size'] ?></td>
                            <td><?php echo $value1['soluongsp'] ?></td>
                            <td class="col-xs-2 col-md-2"><?php echo $sanpham[0]['gia']*$value1['soluongsp']; ?></td>
                            <?php if ($value['id_tinhtrang']==3 && $value1['ghichu'] != "daban") {?>
                                <td id="danhgia">
                               <a href="?controller=rate&id=<?php echo $value1['id_sanpham'] ?>&id_dh=<?php echo $value1['id_donhang'] ?>"><input type="button" value="đánh giá"></a>
                            </td>
                          <?php  }elseif ($value['id_tinhtrang']>3)    
                          { ?>
                             <td class="col-xs-2 col-md-2"><?php echo $tinhtrang[0]['tinhtrang'] ?></td>
                         <?php } ?>
                           
                        </tr>
                        <?php   }}}}
                    } } ?>
                    </table>
                </div>
            </div>
       
            <div  id="click_none_form_taikhoan">
                <form action="" method="post">
                    <li>
                        <label for="fullname">Tên người dùng</label>
                        <input type="text" name="full_name" class="form-control" id="fullname"value="<?php echo $account[0]['full_name']?>">
                        </li>
                        <li>  
                            <label for="username">Tên tài khoản</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $account[0]['username']?>">
                        </li> 
                           <li>
                            <label for="sdt">SĐT</label>
                        <input type="text" name="sdt" class="form-control" id="sdt" value="<?php echo $account[0]['sdt']?>">
                        </li>
                        <li>
                            <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $account[0]['email']?>">
                        </li>
                            <li>
                            <label for="diachi">Địa chỉ</label>
                            <textarea class="form-control" name="diachi" id="diachi" rows="3" ><?php echo $account[0]['diachi']?></textarea>
                        </span>
                        </li>
                            <div class="">
                                <input  name="sua_btn_form" class="btn btn-warning" type="submit" value="Cập nhập sửa tại khoản">
                                <input class="btn btn-danger" id="click_hide_taikhoan" type="text" value="hủy">
                            </div>
                    </form>
                    </div>
        </div>
       
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="../images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hỗ trợ trực tuyến </a></li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                                <li><a href="#">Tình trạng đặt hàng</a></li>
                                <li><a href="#">Thay đổi địa điểm</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Áo thun</a></li>
                                <li><a href="#">Nam</a></li>
                                <li><a href="#">Nữ</a></li>
                                <li><a href="#">Thẻ quà tặng</a></li>
                                <li><a href="#">Giày</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Chính sách hoàn tiền</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                                <li><a href="#">Hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">Nghề nghiệp</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                                <li><a href="#">Chương trình liên kết</a></li>
                                <li><a href="#">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận các bản cập nhật mới nhất từ <br />trang web của chúng tôi và tự cập nhật</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

<script src="../js/account.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/jquery.prettyPhoto.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script>

$(function(){
  $("#click_hide_taikhoan").click(function(){
    $("#click_none_form_taikhoan").hide();
  });
  $("#click_show_taikhoan").click(function(){
    $("#click_none_form_taikhoan").show();
  });
});
$(document).ready(function(){
  $("#click_menu").click(function(){
    $("#click_none_menu").fadeToggle();
  });
});
   </script> 
</body>
</html>