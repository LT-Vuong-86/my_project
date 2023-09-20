<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        button {
            width: 78px;
            height: 36.5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            background: red;
            border: none;
            border-radius: 5px;
            box-shadow: 1px 1px 3px rgba(0,0,0,0.15);
            background: #e62222;
            padding-right: -100px;
            justify-content: space-between;
        }

        button, button span {
            transition: 0.02s;
        }

        button .text {
            padding-left: 5px;
            transform: translateX(10px);
            color: white;
            font-weight: bold;
        }

        button .icon {
            visibility: hidden;
            position: absolute;
            transform: translateX(20px);
            height: 40px;
            width: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        button svg {
            width: 15px;
            fill: #eee;
        }

        button:hover {
            background: #ff3636;
        }

        button:hover .text {
            color: transparent;
        }

        button:hover .icon {
        width: 90px;
        border-left: none;
        transform: translateX(-10px);
        visibility: visible;
        }

        button:focus {
        outline: none;
        }

        button:active .icon svg {
        transform: scale(1);
        }
        
    </style>
   </head><!--/head-->

<body>
	<header id="header">
        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Chuyển đổi điều hướng </span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?controller=home" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="?controller=shop">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=shop">Các sản phẩm</a></li>
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                    </ul>
                                </li>
                                <li><a href="?controller=blog">Blog </a></li>
                                <li><a href="?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ul class="breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ul>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu text-center">
                            <td class="image">Ảnh</td>
                            <td class="description">Tên mặt hàng</td>
                            <td class="price">Đơn giá</td>
                            <td class="quantity">Số lượng</td>
                            <td class="quantity">loại sản phẩm</td>
                            <td class="quantity">size</td>
                            <td class="total">Thành tiền</td>
                            <td class="delete"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $tongtien = 0;
                            if(isset($_SESSION['cart'])){
                                foreach ($_SESSION['cart'] as $key => $value){
                                    $tongtien+=$value['sl']*$value['gia'];
                        ?>
                        <tr class="text-center">
                            <td><img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh']?>" width="100" alt=""></td>
                            <td><?php echo $value['tensanpham']?></td>
                            <td><?php echo number_format($value['gia'])?>đ</td>
                            <td>
                            <a href="?controller=xulyCart&method=giam&id=<?php echo $value['id_sanpham']?>"><input style="cursor: pointer;" type="submit"  value="-"> </a>
                            <?php echo $value['sl']?>
                            <a href="?controller=xulyCart&method=tang&id=<?php echo $value['id_sanpham']?>"><input style="cursor: pointer;" type="submit"  value="+"></a>
                        </td>
                            <td><div><p><?php echo $value['loai_sp']?></p></div></td>
                            <td><div><p><?php echo $value['size_name']?></p></div></td>
                            <td>
                                <?php echo number_format($value['gia']*$value['sl'])?>đ
                            </td>
                            <td>
                                <a style="text-decoration: none;" onclick="return confirm('Xóa sản phẩm này?');" href="?controller=xulyCart&method=xoa&id=<?php echo $value['id_sanpham']?>">
                                    <button class="noselect">
                                        <span class="text">Delete</span>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php   } ?> <tr>
                            <td><a name="btn_xoatoanbo" href="?controller=xulyCart&method=xoatoanbo&id=<?php echo $value['id_sanpham']?>">Xóa toàn bộ</a></td>
                        </tr> <?php }else{if (!empty($giohang)) {
                            $tongtien=0;
                            foreach ($giohang as $key => $value){    
                                $tongtien+=$value['tong'];
                                $sanpham=$db->get('sanpham',array('id_sanpham'=>$value['id_sanpham']));
                    ?>
                    <tr class="text-center">
                        <td><img class="img-responsive" src="../images/sanpham/<?php echo $sanpham[0]['anh_chinh']?>" width="100" alt=""></td>
                        <td><?php echo $sanpham[0]['tensanpham']?></td>
                        <td><?php echo number_format($sanpham[0]['gia'])?>đ</td>
                        
                        <td >
                            <a href="?controller=xulyCart&method=giam&id=<?php echo $value['id_sanpham']?>&size=<?php echo $value['size']?>"><input style="cursor: pointer;" type="submit"  value="-"> </a>
                            <?php echo $value['soluong']?>
                            <a href="?controller=xulyCart&method=tang&id=<?php echo $value['id_sanpham']?>&size=<?php echo $value['size']?>"><input style="cursor: pointer;" type="submit"  value="+"></a>
                        </td>
                       
                        <td><div><p><?php echo $value['loai_sp']?></p></div></td>
                        <td><div><p><?php echo $value['size']?></p></div></td>
                        <td>
                            <?php echo number_format($value['tong'])?>đ
                        </td>
                        <td>
                            <a style="text-decoration: none;" onclick="return confirm('Xóa sản phẩm này?');" href="?controller=xulyCart&method=xoa&id=<?php echo $value['id_sanpham']?>&loai_sp=<?php echo $value['loai_sp']?>&size=<?php echo $value['size']?>">
                                <button class="noselect">
                                    <span class="text">Delete</span>
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php   } ?> <tr>
                            <td><a  href="?controller=xulyCart&method=xoatoanbo&id=<?php echo $value['id_sanpham']?>">Xóa toàn bộ</a></td>
                        </tr><?php } }?>

                    
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>Tổng kết:</h3>
            </div>
            <div class="row">

                <div class="col-sm-12">
                    <div class="total_area">
                        <ul>
                            <li>Tổng tiền<span><?php echo number_format($tongtien)?></span></li>
                        </ul>
                        <a class="btn btn-default update" href="?controller=shop">Tiếp tục mua hàng</a>
                        <a class="btn btn-default check_out" href="?controller=checkout">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

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
                                <li><a href="">Hỗ trợ trực tuyến</a></li>
                                <li><a href="">Liên hệ chúng tôi</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href="">Thay đổi địa điểm</a></li>
                                <li><a href="">câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Áo thun</a></li>
                                <li><a href="">Nam</a></li>
                                <li><a href="">Nữ</a></li>
                                <li><a href="">Thẻ quà tặng</a></li>
                                <li><a href="">Giày</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Điều khoản sử dụng</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách hoàn tiền</a></li>
                                <li><a href="">Hệ thống thanh toán</a></li>
                                <li><a href="">hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Thông tin công ty</a></li>
                                <li><a href="">nghề nghiệp</a></li>
                                <li><a href="">Vị trí cửa hàng</a></li>
                                <li><a href="">Chương trình liên kết</a></li>
                                <li><a href="">bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
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
	


    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>