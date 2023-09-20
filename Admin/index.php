<?php
    session_start();
    include 'Model_database/database.php';
        
        $db = new database();
        if (isset($_GET['controller'])){
            $controller = $_GET['controller'];
        }
        else{
            $controller = 'login';
        }

        include 'Controller/c_' .$controller. '.php';

        // switch ($controller){
        //     case 'trangchu':
        //         include 'Controller/c_trangchu.php';
        //         break;

        //     case 'login':
        //         include 'Controller/c_login.php';
        //         break;
            
        //     case 'nhanvien':
        //         include 'Controller/c_nhanvien.php';
        //         break;
            
        //     case 'sanpham':
        //         include 'Controller/c_qlsanpham.php';
        //         break;

        //     case 'donhang':
        //         include 'Controller/c_qldonhang.php';
        //         break;

        //     case 'dangxuat':
        //         include 'Controller/c_logout.php';
        //         break;

        //     case 'binhluan':
        //         include 'Controller/c_binhluan.php';
        //         break;

        //     case 'chitiet':
        //         include 'Controller/c_chitietdh.php';
        //         break;
        
        //     case 'xulynhanvien':
        //         include 'Controller/c_xulynhanvien.php';
        //         break;
            
        //     case 'xulysanpham':
        //         include 'Controller/c_xulysanpham.php';
        //         break;
            
        //     case 'addnhanvien':
        //         include 'Controller/c_addnhanvien.php';
        //         break;

        //     case 'addsanpham':
        //         include 'Controller/c_addsanpham.php';
        //         break;

        //     case 'xemtrangthai':
        //         include 'Controller/c_trangthaidh.php';
        //         break;
        //     default:
        // }
?>