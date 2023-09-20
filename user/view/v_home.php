<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .product-image-wrapper{
            height: 330px;
        }

        #spin{
            height: 440px;
        }

        .features_items .product-image-wrapper .single-products h5{
            word-wrap: break-word;
            white-space: normal;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            line-height: 14px; 
            font-size: 16px;
            color: black;
        }
        .features_items .product-image-wrapper .single-products h4{
            float: left; 
            color: crimson;
            
        }

        .features_items .product-image-wrapper .single-products h6{
            float: right;
        }

        .category-tab .product-image-wrapper .single-products img,
        .recommended_items .product-image-wrapper .single-products img{
            width:100%; height:250px; object-fit: cover;
        }
        
        h5{
            color: black; 
            position: absolute; 
            margin-top: 10px; 
        }

        .bottom{
            margin-top:45px; 
            width: 100%; 
            height: 100%; 
            position: absolute;
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
                                <li><a href="?controller=account"><i class="fa fa-user"></i> Tài khoản</a></li>
                                <li><a href="?controller=likeproduct"><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li>
                                <?php if (isset($_SESSION['ss_user'])) {
                                    echo "<a href='?controller=logout'><i class='fa fa-lock'></i>Đăng xuất</a>";
                                }else{
                                    echo "<a href='?controller=login'><i class='fa fa-lock'></i>Đăng nhập</a>";
                                } ?>
                                </li>
                                
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
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?controller=home" class="active">Trang chủ</a></li>
                                <li class="dropdown">
                                    <a href="?controller=shop">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu ">
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li><a href="?controller=blog">Blog </a></li>
                                <li><a href="?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <form action="" method="get">
                        <div class="search_box pull-right">
                            <input type="hidden" name="controller" value="shop">
                            <input type="text"  name="keywork" value="<?php  isset($_GET['keywork']) ? $_GET['keywork'] : '' ?>"  placeholder="Search..."/>
                            <button><span> &#8689;</span></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="../images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="../images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-12 col-md-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <img src="../images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                    <img src="../images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    
                    <div class="left-sidebar">
                        <h2>Loại</h2>
                    <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nam
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=6">Áo Vest</a></li>
                                                <li><a href="?controller=shop&id_dm=5">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=4">Áo Polo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nữ
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="womens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=3">Đầm</a></li>
                                                <li><a href="?controller=shop&id_dm=2">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=1">Áo nữ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#kid">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span> trẻ em
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="kid" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="?controller=shop&id_dm=7">Áo</a></li>
                                                <li><a href="?controller=shop&id_dm=8">Quần</a></li>
                                                <li><a href="?controller=shop&id_dm=9">Cả bộ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
    
                            </div>

                        </div>
                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="../images/home/shipping.jpg" alt="" />
                        </div>
                       
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-md-9 col-xs-12 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Một số sản phẩm nổi bật</h2>
                        
                        <?php
                            $i = 0;
                            $random_products = array_rand($sanpham, min(count($sanpham), 10));
                            foreach ($random_products as $key => $value) {
                                if(++$i == 10) break;

                                // Kiểm tra xem giá trị $random_product_id có phải là một khóa hợp lệ của mảng $sanpham không
                                if (array_key_exists($value, $sanpham)) {
                                    $random_product = $sanpham[$value];
                                } else {
                                    // Nếu giá trị $random_product_id không phải là một khóa hợp lệ của mảng $sanpham, thì bỏ qua sản phẩm này
                                    continue;
                                }

                        ?>
                        <a href="?controller=product-detail&id=<?php echo $random_product['id_sanpham']?>">
                            <div class="col-sm-4"> 
                                <div class="product-image-wrapper">
                                    <div class="single-products text-center">
                                        <div class="productinfo">
                                            <a href="?controller=product-detail&id=<?php  echo $random_product['id_sanpham'] ?>">
                                                <img class="img-responsive" style="width:100%; height:250px; object-fit: cover;" src="../images/sanpham/<?php echo $random_product['anh_chinh']?>" alt="" />
                                            </a> 
                                            <h5><?php echo $random_product['tensanpham']?></h5>
                                        </div>
                                        <div class="bottom">
                                            <h4><sup>đ</sup><?php echo number_format($random_product['gia'])?></h4>
                                            <h6>Đã bán: <?php echo $random_product['daban']?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php }?>
                    </div>
                    <!--features_items-->

                    <div class="category-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">Vest</a></li>
                                <li><a href="#blazers" data-toggle="tab">Quần nữ</a></li>
                                <li><a href="#dress" data-toggle="tab">Váy, đầm</a></li>
                                <li><a href="#boys" data-toggle="tab">Áo nam</a></li>
                                <li><a href="#kids" data-toggle="tab">Trẻ em</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tshirt">
                                <?php
                                $dk=4;
                                foreach ($sp_vest as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper" id="spin">
                                            <div class="single-products text-center">
                                                <div class="productinfo">
                                                    <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                    <h5><?php echo $value['tensanpham']?></h5>
                                                </div>
                                                <div class="bottom">
                                                    <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                    <p>Đã bán: <?php echo $value['daban']?></p>
                                                    <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                <?php }?>
                            </div>

                            <div class="tab-pane fade" id="blazers">
                                <?php
                                    $dk=4;
                                    foreach ($sp_trousers_girl as $key => $value) {?>  
                                    <?php if ($key < $dk) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>

                            <div class="tab-pane fade" id="dress">
                                <?php
                                    $dk=4;
                                    foreach ($sp_dress as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>

                            <div class="tab-pane fade" id="boys">
                            <?php
                                    $dk=4;
                                    foreach ($sp_shirt_boy as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>

                            <div class="tab-pane fade" id="kids">
                            <?php
                                    $dk=4;
                                    foreach ($sp_suit_kids as $key => $value) { ?>  
                                    <?php if ($key < $dk) {?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php 
                                        $i = 0;
                                        foreach ($sp_shirt_girl as $key => $value) {
                                        if(++$i == 4) break;
                                        ?>       
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                   
                                </div>
                                <div class="item">
                                <?php
                                    $i = 0;
                                    foreach ($sp_trousers_girl as $key => $value) {
                                        if(++$i == 4) break;?>       
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>    
                                </div>
                                <div class="item">
                                <?php 
                                    $i = 0;
                                    foreach ($sp_dress as $key => $value) {
                                        if(++$i == 4) break;?>     
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>    
                                </div>
                                <div class="item">
                                <?php 
                                    $i = 0;
                                    foreach ($sp_shirt_boy as $key => $value){ 
                                        if(++$i == 4) break;?>       
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>    
                                </div>
                                <div class="item">
                                <?php
                                    $i = 0; 
                                    foreach ($sp_vest as $key => $value) {
                                        if(++$i == 4) break;     
                                    ?>       
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper" id="spin">
                                                <div class="single-products text-center">
                                                    <div class="productinfo">
                                                        <img class="img-responsive" src="../images/sanpham/<?php echo $value['anh_chinh'] ?>" alt="" />
                                                        <h5><?php echo $value['tensanpham']?></h5>
                                                    </div>
                                                    <div class="bottom">
                                                        <h3><span><?php echo number_format($value['gia'])?></span>đ</h3>
                                                        <p>Đã bán: <?php echo $value['daban']?></p>
                                                        <a href="?controller=product-detail&id=<?php  echo $value['id_sanpham'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>    
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hỗ trợ trực tuyến</a></li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                                <li><a href="#">Tình trạng đặt hàng</a></li>
                                <li><a href="#">Thay đổi địa điểm</a></li>
                                <li><a href="#">câu hỏi thường gặp</a></li>
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
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Chính sách hoàn tiền</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                                <li><a href="#">hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">nghề nghiệp</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                                <li><a href="#">Chương trình liên kết</a></li>
                                <li><a href="#">bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận các bản cập nhật mới nhất từ <br />trang web của chúng tôi và tự cập nhật cho chính bạn...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">bản quyền © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->

    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/price-range.js"></script>    
    <script src="../js/main.js"></script>
</body>
</html>