<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/donhang.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

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

        .details .recentstaff table tr td{
            padding: 10px;
        }

        .details .recentstaff table tr td:last-child {
            text-align: center;
        }

        .details .recentstaff table tr td:nth-child(1),
        .details .recentstaff table tr td:nth-child(2),
        .details .recentstaff table tr td:nth-child(5),
        .details .recentstaff table tr td:nth-child(6) {
            text-align: center;
        }

        .details .recentstaff table tr td:nth-child(3),
        .details .recentstaff table tr td:nth-child(4) {
            text-align: start;
        }

        .details .recentstaff table tr td:nth-child(7) {
            text-align: end;
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

        .main{
            position: absolute;
            width: calc(100% - 300px);
            left: 300px;
            min-height: 100vh;
            background: var(--white);
            transition: 0.5s;
        }

        .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
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

        .search label i{
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
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
    </style>
</head>
<body>
    <div class="topbar">
        <div class="toggle">
            
        </div>

        <div class="search">
            <label for="">
                <input type="text" placeholder="Tìm kiếm...">
                <i class='bx bx-search'></i>
            </label>
        </div>

        <div class="user">
            <img src="./img/iconE.png" alt="">
        </div>
    </div>

    <div class="details">
        <div class="recentstaff">
            <div class="cardHeader">
                <h2>Trạng thái đơn hàng</h2>
                <a href="?controller=donhang" class="btn">Quay lại</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên khách hàng</td>
                        <td>SĐT</td>
                        <td>Tên mặt hàng</td>
                        <td>Số lượng đơn hàng</td>
                        <td>Tổng giá trị</td>
                        <td>Trạng thái</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hoàng Đức Tiến</td>
                        <td>0123456789</td>
                        <td>Quần đùi nam ống rộng</td>
                        <td>2</td>
                        <td>60.000đ</td>
                        <td><span class="status delivered">Đã giao</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Hoàng Đức Tiến</td>
                        <td>0123456789</td>
                        <td>Quần đùi nam ống rộng</td>
                        <td>2</td>
                        <td>60.000đ</td>
                        <td><span class="status pending">Chưa giải quyết</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Hoàng Đức Tiến</td>
                        <td>0123456789</td>
                        <td>Quần đùi nam ống rộng</td>
                        <td>2</td>
                        <td>60.000đ</td>
                        <td><span class="status return">Trả hàng</span></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Hoàng Đức Tiến</td>
                        <td>0123456789</td>
                        <td>Quần đùi nam ống rộng</td>
                        <td>2</td>
                        <td>60.000đ</td>
                        <td><span class="status inProgress">Đang giao hàng</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>