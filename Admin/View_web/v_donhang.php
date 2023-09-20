<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>E-Shopper | Admin | Đơn hàng</title>
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

        /* .navigation ul li:hover a::before,
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
/* 
        .navigation ul li:hover a::after,
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

        .details{
            position: relative;
            width: 100%;
            padding: 20px;
            display: grid;
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

        /* .details .recentstaff table tr td{
            padding: 10px;
        } */

        .details .recentstaff table tr td:last-child {
            text-align: center;
        }
        .details .recentstaff table tr td:nth-child(4){
            text-align:center ;
            width: 300px;
        }
        
        .details .recentstaff table tr td:nth-child(1){
            text-align: center;
            padding-right: 10px;
        }

        .details .recentstaff table tr td:nth-child(2),
        .details .recentstaff table tr td:nth-child(3),
        .details .recentstaff table tr td:nth-child(5),
        .details .recentstaff table tr td:nth-child(6),
        .details .recentstaff table tr td:nth-child(7)
        {
            text-align: center;
        }

        .details .recentstaff table tr td:nth-child(2){
            text-align: start;
        }

        .status.delivered{
            padding: 2px 4px;
            background: greenyellow;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.pending{
            padding: 2px 4px;
            background: rgb(255, 111, 0);
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.return{
            padding: 2px 4px;
            background: red;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .status.inProgress{
            padding: 2px 4px;
            background: #1795ce;
            color: var(--white);
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .details .recentstaff td a.chitiet{
            position: relative;
            text-decoration: none;
            justify-content: center;
            font-size: 20px;
            color: black;
        }

        .details .recentstaff td a.chitiet:hover{
            color: blue;
        }

        .details .recentstaff td span{
            color: red;
        }

        .details .recentstaff td a.sua{
            float: left;
            text-decoration: none;
        }

        .details .recentstaff td a.sua:hover{
            color: greenyellow;
        }

        .details .recentstaff td a.xoa{
            float: right;
            text-decoration: none;
        }

        .details .recentstaff td a.xoa:hover{
            color: crimson;
        }

        button, button span {
            transition: 0.02s;
        }

        .details .recentstaff td.xuly button span{
            font-size: 15px;
            color: black;
        }

        .details .recentstaff td.xuly button span.textsua:hover{
            text-shadow: 0 0 10px black;
            font-weight: bold;
        }

        .details .recentstaff td.xuly button span.textxoa:hover{
            text-shadow: 0 0 10px black;
            font-weight: bold;
        }
        .active_admin{
            background: var(--yellow);
        }
        .details .recentstaff td a.sua{
            float: left;
            text-decoration: none;
        }

        .details .recentstaff td a.sua:hover{
            color: greenyellow;
        }

        .details .recentstaff td a.xoa{
            float: right;
            text-decoration: none;
        }

        .details .recentstaff td a.xoa:hover{
            color: crimson;
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
                    <a href="?controller=trangchu">
                        <span class="icon"><img style="width: 40px; height: 40px;" src="assets/img/iconE.png" alt=""></span>
                        <span class="title"><?php if (isset( $_SESSION['name_admin'] )) {
                            echo  $_SESSION['name_admin'] ;
                        } ?></span>
                    </a>
                </li>

                <li>
                    <a href="?controller=trangchu">
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
                    <a href="?controller=donhang" class="active_admin" >
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
                <form action="" method=post>
                <div class="search_codition">
                    <h4>Tìm kiếm theo</h4>
                    <select name="codition_search" id="">
                        <option value="id_kh" selected >Mã khách hàng</option>
                        <option value="id_donhang">Mã đơn hàng</option>
                    </select>
                </div>
                <div class="search">
                    <label for="">
                        <input type="text" name="content" placeholder="Tìm kiếm...">
                        <span><input  type="submit"  id="myInput" name="search"></span>
                    </label>
                </div>
                </form>
                <div class="user">
                    <img src="assets/img/iconE.png" alt="">
                </div>
            </div>

          

            <div class="details">
                <div class="recentstaff">
                    <div class="cardHeader">
                        <h2>Quản lý đơn hàng</h2>
                        <a href="?controller=adddonhang" class="btn">Thêm đơn hàng</a>
                    </div>

                   

                    
                        <table>
                            <?php 
                                $admin = $db->get('taikhoan', array('id'=>$_SESSION['ss_admin']));
                                ?>
                            <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Mã đơn hàng</td>
                                    <td>Mã khách hàng</td>    
                                    <td>Tổng</td>
                                    <td>Tình trạng</td>
                                    <td>Thao tác</td>
                                    <td>Chi tiết</td>
                                   
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php
                               $i=1;
                                    foreach ($donhang as $key => $value) {
                                     $tinhtrang=$db->get('tinhtrang_dh',array('id_tinhtrang'=>$value['id_tinhtrang']));
                                  ?>
                                    <tr id="tr">
                                    <td class='td'><?php echo $i++ ?></td>
                                    <td class='td'><?php echo $value['id_donhang'] ?></td>
                                    <td class='td'><?php echo $value['id_kh']  ?></td>
                                    <td class='td'><?php echo number_format($value['tong'])?>đ</td>

                                    <td class='td'><?php echo $tinhtrang[0]['tinhtrang'] ?>
                                    <a class="status" href="?controller=xulydh&method=status&id=<?php echo $value['id_donhang']?>&tt=<?php echo $value['id_tinhtrang']?>">
                                        <?php switch($value['id_tinhtrang']){
                                            case '1':
                                                echo "<input type='submit' style='background-color:green ; cursor: pointer;' value='Duyệt'>";
                                                break;
                                            case '2':
                                                echo" <input type='submit' style='background-color:red ; cursor: pointer;' value='Hủy'>";
                                                break;
                
                                              }  ?></a>
                                   
                                    </td>

                                    <td class='td' class="xuly">
                                   
                                        <button  class="noselect">
                                        <a  class="sua" onclick="return confirm('Sửa nhân viên này?');" 
                                     href="?controller=xulydh&method=sua&id=<?php echo $value['id_donhang']?>">
                                            <span class="textsua">Sửa</span>
                                            </a>
                                        </button>
                                    

                                    
                                        <button  class="noselect">
                                        <a  class="xoa" onclick="return confirm('Xóa nhân viên này?');" 
                                        href="?controller=xulydh&method=xoa&id=<?php echo $value['id_donhang']?>">
                                            <span class="textxoa">Xóa</span>
                                            </a>
                                        </button>
                                    
                                </td class='td'>
                                <td><a class="chitiet" href="?controller=chitietdh&id=<?php echo $value['id_donhang']?>"><h2><i class='bx bx-right-arrow-alt'></i></h2></a></td>
                                   
                                </tr>
                               
                            </tbody>
                            <?php } ?>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
  
        let list = document.querySelectorAll(".navigation li");
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