<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/adminstyle.css">
    <title>E-Shopper | Admin</title>
    <style>
       
        *{
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --black: black;
            --white: #fff;
            --yellow: #F5A623;
            --grey: grey;
            --smoke: rgb(220, 220, 220);
        }

        body{
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container{
            position: relative;
            width: 100%;
        }

        .navigation{
            position: fixed;
            width: 300px;
            height: 100%;
            background: var(--black);
            border-left: 10px solid var(--black);
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation.active{
            width: 80px;
        }

        .navigation ul{
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigation ul li{
            position: relative;
            width: 100%;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        /* .navigation ul li:hover,
        .navigation ul li.hovered{
            background: var(--white);
        } */

        .navigation ul li:nth-child(1){
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navigation ul li a{
            position: relative;
            display: block;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: var(--white);
        }

        /* .navigation ul li:hover a,
        .navigation ul li.hovered a{
            color: var(--black);
        } */

        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 60px;
            height: 60px;
            line-height: 75px;
            text-align: center;
        }

        .navigation ul li a .icon img{
            font-size: 1.75rem;
        }

        .navigation ul li a .icon i{
            font-size: 1.75rem;
        }

        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            line-height: 60px;
            text-align: start;
            white-space: nowrap;
        }
/* 
        .navigation ul li:hover a::before,
        .navigation ul li.hovered a::before{
            content: '';
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        } */

        /* .navigation ul li:hover a::after,
        .navigation ul li.hovered a::after{
            content: '';
            position: absolute;
            right: 0;
            bottom: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
        } */

        .main{
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: var(--white);
            transition: 0.5s;
        }

        .main.active{
            width: calc(100% - 80px);
            left: 80px;
        }

        .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
        }

        .toggle{
            position: relative;
            top: 0;
            height: 60px;
            width: 60px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .search{
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label{
            position: relative;
            width: 100%;
        }

        .search label input{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black);
        }

        .search label span:hover{
            cursor: pointer;
            opacity: 0.6;
        }
        .search label span{
            position: absolute;
            top: 0;
            margin-top: -11px;
            border-radius: 45%;
            margin-right: -10px;
            right: 10px;
           cursor: pointer;
            font-size: 1.2rem;
        }

        .user{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .user img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cardBox{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4 ,1fr);
            grid-gap: 30px;
        }

        .cardBox .card{
            position: relative;
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        }

        .cardBox .card .numbers{
            position: relative;
            font-weight: 500;
            font-size: 2.5rem;
            color: var(--yellow);
        }

        .cardBox .card .cardName{
            color: var(--grey);
            font-size: 1.1rem;
            margin-top: 5px;
        }

        .cardBox .card .iconBx{
            font-size: 3.5rem;
            color: var(--black)
        }

        .cardBox .card:hover{
            background: var(--yellow);
        }

        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName,
        .cardBox .card:hover .iconBx{
            color: var(--white);
        }

        .details{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 30px;
            margin-top: 10px;
        }

        .details .recentstaff{
            position: relative;
            display: grid;
            min-height: 500px;
            background: var(--white);
            padding: 20px;
            box-shadow: 0 7px 25px var(--black);
            border-radius: 20px;
        }

        .details .cardHeader{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .cardHeader h2{
            font-weight: 600;
            color: var(--black);
        }

        .cardHeader .btn{
            position: relative;
            padding: 5px 10px;
            background: var(--yellow);
            text-decoration: none;
            color: var(--white);
            border-radius: 6px;
        }

        .details table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .details table thead td{
            font-weight: 600;
        }

        .details .recentstaff table tr{
            color: var(--grey);
            border-bottom: 1px solid var(--black);
        }

        .details .recentstaff table tr:last-child{
            border-bottom: none;
        }

        .details .recentstaff table tbody tr:hover{
            background: var(--yellow);
            color: var(--black );
        }

        .details .recentstaff table tr td{
            padding: 10px;
        }
        .active_admin{
            background: var(--yellow);
        }
        .search_codition{
            position: absolute;
        }
        .search_codition h4 {
            margin-left: -120px;
           
        }
        .search_codition select{
            margin-left: -120px;
            
        }
       .toggle form {
            width:2000px ;
            display: flex;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="?controller=trangchu" >
                        <span class="icon"><img style="width: 40px; height: 40px; " src="..images/home/logo.png" alt=""></span>
                        <span class="title"><?php if (isset( $_SESSION['name_admin'] )) {
                            echo  $_SESSION['name_admin'] ;
                        } ?></span>
                    </a>
                </li>

                <li>
                    <a href="?controller=trangchu" class='active_admin'>
                        <span class="icon"><i class='bx bx-home'></i></span>
                        <span class="title">Trang chủ</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=taikhoan">
                        <span class="icon"><i class='bx bxs-user-detail'></i></span>
                        <span class="title">Tài khoản</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=sanpham">
                        <span class="icon"><i class='bx bxl-product-hunt'></i></span>
                        <span class="title">Sản phẩm</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=donhang">
                        <span class="icon"><i class='bx bx-notepad'></i></span>
                        <span class="title">Đơn hàng</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="icon"><i class='bx bx-line-chart'></i></span>
                        <span class="title">Doanh thu</span>
                    </a>
                </li> -->

              

                <li>
                    <a href="?controller=khachhang">
                        <span class="icon"><i class='bx bx-user nav_icon'></i></span>
                        <span class="title">Khách hàng</span>
                    </a>
                </li>

                <li>
                    <a href="?controller=dangxuat">
                        <span class="icon"><i class='bx bx-log-out'></i></span>
                        <span class="title">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class='bx bx-menu'></i>
                </div>
                
                <div class="user">
                    <img src="..images/home/logo.png" alt="">
                </div>
            </div>

            <div class="cardBox">
                <!-- <a style="text-decoration:none" href="">
                    <div class="card">
                        <div>
                            <div class="numbers">1513</div>
                            <div class="cardName">Lượt xem</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                

                <a style="text-decoration:none" href="">
                    <div class="card">
                        <div>
                            <div class="numbers">100</div>
                            <div class="cardName">Giảm giá</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                 -->

                <a style="text-decoration:none" href="?controller=binhluan">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo $count_rate ?></div>
                            <div class="cardName">Bình luận</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                
                <a style="text-decoration:none" href="">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo number_format($tongdoanhthu) ?></div>
                            <div class="cardName">Tổng doanh thu</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cash-outline"></ion-icon>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <script>
                //add hovered
               
        // let list = document.querySelectorAll(".navigation li");
        // function activeLink(){
        //     list.forEach(item=>{
        //         item.classList.remove("hovered");
        //     });
        //     this.classList.add("hovered");
        // }
        // list.forEach((item) => item.addEventListener("mouseover", activeLink));

        //menu toggle
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function(){
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        }
    </script>

    
</body>
</html>