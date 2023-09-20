<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
       <style>
       
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        #product-variation{
            overflow: hidden;
            min-width: 5rem;
            min-height: 2.125rem;
            box-sizing: border-box;
            padding: .25rem .75rem;
            margin: 0 8px 8px 0;
            color: rgba(0,0,0,.8);
            text-align: center;
            border-radius: 2px;
            border: 1px solid rgba(0,0,0,.09);
            position: relative;
            background: whitesmoke;
            outline: 0;
            word-break: break-word;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        #product-variation:hover{
            border-color: red;
        }
        .size_color{
            display: contents;
        }
        .warning{
            color:red;
        }
       #click_none_replay{
        display: none;
       }
       
    </style>
</head>
<!--/head-->

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
                            <li><a href="?controller=account"><i class="fa fa-user"></i>Tài khoản</a></li>
                                <li><a href="?controller=likeproduct"><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><?php if (isset($_SESSION['ss_user'])) {
                                    echo "<a href='?controller=logout'><i class='fa fa-lock'></i>Đăng xuất</a>";
                                }else{
                                    echo "<a href='?controller=login'><i class='fa fa-lock'></i>Đăng nhập</a>";
                                } ?></li>
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
                                <li class="dropdown"><a href="#">Mail<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=shop">Cửa hàng</a></li>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Loại</h2>
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
                                            <li><a href="">Áo Vest</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Áo Polo</a></li>
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
                                            <li><a href="">Đầm</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Áo nữ</a></li>
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
                                            <li><a href="">Áo</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Cả bộ</a></li>
                                        </ul>
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
                    
                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="../images/sanpham/<?php echo $product[0]['anh_chinh']?>" alt="" />
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php 
                                            foreach($anhphu1 as $key => $value){?>
                                            <img style="width:100px; height:100px;" class="imagess" src="../images/sanpham/<?php echo $value['anh_phu']?>" alt="">
                                            
                                        <?php }?>
                                        
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a style="margin-right: -13px;" class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <form action="" method="post">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="../images/product-details/new.jpg" class="newarrival" alt="" />

                                <!-- /// product-name //// -->
                                
                                <div class="product-content-right-product-name">
                                    <strong>
                                        <h1 >
                                           <input type="text" name="tensanpham" value=" <?php echo $product[0]['tensanpham']?> ">
                                        </h1>
                                    </strong>
                                    <p>Web ID: <?php echo $product[0]['id_sanpham']?></p>

                                        <li>
												   <?php global $color; for ($i=0; $i <5 ; $i++) { ?>
                                                    
                                                    <?php 
                                                    if (isset($rating)) {
                                                    if($i<$rating){
                                                    $color="color:#FFA617";
                                                    }else{
                                                    $color="color:";
                                                    } }?>
                                                   <span style=" font-size: 20px;<?php echo $color ?>"> &#9733;</span>
                                               <?php } ?>
                                        </li>

                                </div>

                                <!-- //// productproduct-giá //// -->
                                <div class="product-content-right-product-price">
                                    <span class="cart"><?php echo number_format($product[0]['gia'])?><sup>đ</sup></span>
                                </div>
                                
                                
                                <div class="product-content-right-product-color">
                                    <p style="font-weight: bold;">Loại sản phẩm</p>
                                   
                                    <?php 
                                        foreach($anhphu1 as $key => $value){
                                    ?>
                                    
                                    <div class="size_color">
                                    <label>
                                        <input type="radio"  name="loai_sp" value="<?php echo $value['type_name']?>"  >
                                        <span class="text-uppercase"><?php echo $value['type_name']?></span>
                                        </label>
                                    </div>    
                                    <?php  }?>
                                    <?php if (isset($loi['loai_sp'])) { ?>
                                        <p ><span class="warning"><?php echo $loi['loai_sp'] ?></span></p> 
                                   <?php }  ?>
                                   
                                </div>
                               

                                <!-- //// product-size //// -->
                                <div class="product-content-right-product-size">
                                    <p style="font-weight: bold;">Size</p>
                                    <div class="size">
                                   
                                     
                                       <label>
                                        <input type="radio" name="size_name" value="s" >
                                        <span class="text-uppercase">S</span>
                                    </label> 
                                    <label>
                                        <input type="radio" name="size_name" value="m" >
                                        <span class="text-uppercase">M</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="size_name" value="l" >
                                        <span class="text-uppercase">L</span>
                                    </label>
                                     <label>
                                        <input type="radio" name="size_name" value="xl">
                                        <span class="text-uppercase">XL</span>
                                    </label>
                                  <label>
                                        <input type="radio" name="size_name" value="xxl">
                                        <span class="text-uppercase slash">XXL</span>
                                    </label>
                                       <!-- <li><input type="submit"  name="size_name" value="S" ><?php echo '<br>sl:'.$size[0]['s']  ?></li> 
                                         <li><input type="submit"  name="size_name" value="M" ><?php echo '<br>sl:'.$size[0]['m']  ?></li> 
                                       <li><input type="submit"  name="size_name" value="L" ><?php echo '<br>sl:'.$size[0]['l']  ?></li> 
                                        <li><input type="submit"  name="size_name" value="XL" ><?php echo '<br>sl:'.$size[0]['xl']  ?></li>
                                        <li><input type="submit"  name="size_name" value="XXL" ><?php echo '<br>sl:'.$size[0]['xxl']  ?></li> -->
                                        <?php if (isset($loi['size_name'])) { ?>
                                         <p ><span class="warning"><?php echo $loi['size_name'] ?></span></p> 
                                   <?php }  ?>
                                      
                                    </div>
                                </div>
                              
                                <div class="quantity">
                                    <span>
                                    
                                       <input style="cursor: pointer;" type="button" name="giam" value="-">       
                                        <input type="number" min="1" max="" name="sl" value="1">
                                        <input type="button" name="tang" value="+">
                                    
									</span>
                                </div>


                                <!-- /// product-button /// -->
                                <div class="product-content-right-product-button">
                                    <button name="themgiohang">THÊM VÀO GIỎ HÀNG</button>
                                    <button name="muangay">MUA NGAY</button>
                                    <button  name="yeuthich">&hearts;</button>
                                </div>

                                </span>
                                <p><b>Sẵn có:</b> Còn hàng</p>
                                <p><b>Tình trạng:</b> Mới</p>
                                <a href=""><img src="../images/product-details/share.png" class="share img-responsive" alt="" /></a>
                            </div>
                            </form>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <!-- <li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li> -->

                                <li class="active"><a href="#reviews" data-toggle="tab">chi tiết</a></li>
                                <li><a href="#tag" data-toggle="tab">Đánh giá</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                           <div class="tab-pane fade " id="tag">
                                <div class="col-sm-12">
                                   <!--/blog-post-area-->
                                    <div class="rating-area">
                                        <ul class="ratings">
                                            <li class="rate-this">Đánh giá mục này:</li>
                                            <li>
												<?php global $color; for ($i=0; $i <5 ; $i++) { ?>
                                                    
                                                    <?php 
                                                    if (isset($rating)) {
                                                    if($i<$rating){
                                                    $color="color:#FFA617";
                                                    }else{
                                                    $color="color:";
                                                    } }?>
                                                   <span style=" font-size: 20px;<?php echo $color ?>"> &#9733;</span>
                                               <?php } ?>
                                        </li>
                                            <li class="color">(<?php if (isset($rating)) {?><?php echo $count_rate; ?> <?php }else{
                                                echo 0;
                                            } ?> phiếu)</li>
                                        </ul>
                                        <h2><?php if (isset($rating)) {?><?php echo $count_rate; ?> <?php }else{
                                                echo 0;
                                            } ?> RESPONSES</h2>
                                    </div>
                                    
                                    <?php foreach ($rate_star as $key => $value) { 
                                                    $taikhoan_rate=$db->get('taikhoan',array('id'=>$value['id_taikhoan']))
                                                    ?>
                                                    
                                    <div class="response-area">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="../images/home/user.png" alt="">
                                                </a>
                                               
                                                <div class="media-body">
                                                    <ul class="sinlge-post-meta">
                                                        <li><i class="fa fa-user"></i><?php echo $taikhoan_rate[0]['full_name'] ?></li>
                                                        <li><i class="fa fa-calendar"></i> <?php echo "DEC".$value['date_rate'] ?> </li>
                                                    </ul>
                                                    <?php global $color; for ($i=0; $i <5 ; $i++) { ?>
                                                    
                                                    <?php 
                                                        if (isset($value['rate_rating'])) {
                                                            if($i<$value['rate_rating']){
                                                                $color="color:#FFA617";
                                                            }else{
                                                                $color="color:";
                                                            } }?>
                                                        <span style=" font-size: 20px;<?php echo $color ?>"> &#9733;</span>
                                                        <?php } ?>
                                                            <p><?php echo $value['rate_content'] ?></p>
                                                            <span class="btn btn-primary" class="click_replay"><i class="fa fa-reply"></i>phát lại</span>
                                                </div>
                                            </li>
                                            <?php   ?>
                                            <li class="media second-media" class="click_none_replay">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="../images/home/logo.png" alt="">
                                                </a>
                                                    <?php if ($value['rate_rating']>=3) {?>
                                                        <p>Cảm ơn quý đã mua hàng của chúng tôi</p>
                                                  <?php  }else{?>
                                                    <p>Cảm ơn quý đã mua hàng của chúng tôi, chúng tôi rất xin lỗi vì trải nghiệm ko hài lòng của quý khách </p>
                                                <?php  } ?>
                                            </li>
                                        </ul>
                                        </div>
                                        <?php  } ?>
                                    
                                </div>
                            </div>
                       

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <div class="single-blog-post">
                                    <ul>
                                        <li>
												   <?php global $color; for ($i=0; $i <5 ; $i++) { ?>
                                                    
                                                    <?php 
                                                    if (isset($rating)) {
                                                    if($i<$rating){
                                                    $color="color:#FFA617";
                                                    }else{
                                                    $color="color:";
                                                    } }?>
                                                   <span style=" font-size: 20px;<?php echo $color ?>"> &#9733;</span>
                                               <?php } ?>
                                        </li>
                                    </ul> 
                                        <h3> <?php echo $product[0]['tensanpham']?></h3>
                                        
                                        <div class="post-meta">
                                        
                                            <ul>
                                                <li><i class="fa fa-user"></i> Mac Doe</li>
                                                
                                                <li><i class="fa fa-calendar"></i> <?php echo $product[0]['ngaytao']?></li>
                                            </ul>
                                            
                                        </div>
                                        <a href="">
                                            <img src="../images/sanpham/<?php echo $product[0]['tensanpham']?>" alt="">
                                        </a>
                                        
                                        <p>
                                            <?php echo $description?>
                                                </p>
                                       
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Các đề mục được đề xuất</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ trực tuyến</a></li>
                                <li><a href="">Liên hệ chúng tôi</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href=""> Thay đổi địa điểm</a></li>
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
                            <h2>chính sách</h2>
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

    </footer>
    <!--/Footer-->


    <script>
  
        const inputGiam = document.querySelector("input[name='giam']");
const inputSl = document.querySelector("input[name='sl']");
const inputTang = document.querySelector("input[name='tang']");

inputGiam.addEventListener("click", function() {
    if (inputSl.value < 1) {
    alert("Số ko thích hợp");
    inputSl.value = 1;
  } else {
    inputSl.value--;
  }
});

inputTang.addEventListener("click", function() {
  inputSl.value++;
});
        function addBorder(button) {
  button.style.border = "1px solid red";
}
document.querySelector(".active").addEventListener("click", addBorder);
        let i, u;
        const images = document.getElementsByClassName('imagess');
        const button = document.querySelector('.right');
        const button1 = document.querySelector('.left');
        for (i = 3; i < images.length; i++) {
            images[i].style.display = 'none';
        }
        // Nếu đang hiển thị ảnh, ẩn đi khi vượt quá 4 ảnh

        if (button) {
            button.addEventListener("click", function() {
                for (u = 0; u < images.length; u++) {
                    images[u].style.display = 'block';
                }
                for (i = 0; i < 3; i++) {
                    images[i].style.display = 'none';
                }
            })
        }
        if (button1) {
            button1.addEventListener("click", function() {
                for (u = 0; u < images.length; u++) {
                    images[u].style.display = 'none';
                }
                for (i = 0; i < 3; i++) {
                    images[i].style.display = 'block';
                }
            })
        }
        const bigimg = document.querySelector(".view-product img")
        const smallimg = document.querySelectorAll(".imagess")
        smallimg.forEach(function(imgitem) {
            imgitem.addEventListener("click", function() {
                bigimg.src = imgitem.src
            })
        })
    </script>
    <script src="../js/jquery.js"></script>
    <script src="../js/price-range.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
  
</body>

</html>