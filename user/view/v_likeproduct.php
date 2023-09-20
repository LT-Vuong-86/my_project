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

      .like_product{
        margin-top: 20px;
        background-color: white;
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
                                </li>                                    
                                
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
        <div  class="like_product ">
                    <div class="features_items ">
                        <!--features_items-->
                        <h2 class="title text-center">Sản phẩm yêu thích</h2>
                        
                        <?php
                            foreach ($sanphamlikeproduct as $key => $sanphamlikeproduct) {                               
                        ?>
                        <a href="?controller=product-detail&id=<?php echo $sanphamlikeproduct['id_sanpham']?>">
                            <div class="col-sm-4 col-md-2"> 
                                <div class="product-image-wrapper">
                                    <div class="single-products text-center">
                                        <div class="productinfo">
                                            <a href="?controller=product-detail&id=<?php  echo $sanphamlikeproduct['id_sanpham'] ?>">
                                                <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $sanphamlikeproduct['anh_chinh']?>" alt="" />
                                            </a> 
                                            <h5><?php echo $sanphamlikeproduct['tensanpham']?></h5>
                                        </div>
                                        <div class="bottom">
                                            <h4><sup>đ</sup><?php echo number_format($sanphamlikeproduct['gia'])?></h4>
                                            <h6>Đã bán: <?php echo $sanphamlikeproduct['daban']?></h6>
                                        </div>
                                    </div>
                        
                                    <a href="?controller=likeproduct&method=xoa&id=<?php  echo $sanphamlikeproduct['id_sanpham'] ?>"><input type="submit" onclick="return confirm('Bạn đồng ý xóa sản phẩm này?');" style="width:100%" value="xóa" class="btn btn-danger"></a>
                                </div>
                                
                            </div>
                        </a>
                       
                              
                        <?php }?>
                    </div>
                    <a href="?controller=likeproduct&method=xoatat"><input type="submit" onclick="return confirm('Bạn đồng ý xóa tất cả?');" style="width:100%" value="xóa tất cả" class="btn btn-danger"></a>
                </div>  
              
    <footer id="footer ">
        <!--Footer-->
        <div class="footer-widget col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 ">
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
                                <li><a href=""> Hệ thống thanh toán</a></li>
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
                                <li><a href=""> Chương trình liên kết</a></li>
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
	


  
</body>
</html>