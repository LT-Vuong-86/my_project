<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Cập nhật nhân viên</title></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
    --success-color: #2691d9;
    --error-color: #e74c3c;
}

html, body, .wrapper{
    height: 100%;  
}

body{
    display: grid;
    place-items: center;
    padding: 24px;
    font-family: "Ubuntu";
    color: #000;
    animation: rotate 6s infinite alternate linear;
    transition: all 1s;
}

.container{
    width: 800px;
    height: auto;
    border: 1px solid black;
    border-radius: 10px;
    background: white;
    padding: 40px;
}

.container h2{
    text-align: center;
}
.form-control{
    width: 100%;
    position: relative;
    border: 1px solid grey;
}
.form-control:hover{
    border: 1px solid var(--success-color);
    box-shadow: 2px 2px 2px blue;
}

.form-control input{
    width: 100%;
    height: 40px;
    border: none;
    outline: none;
    font-size: 16px;
}
.form-control span{
    position: absolute;
}

.form-control input:focus ~ span{
    width: 100%;
}

body .button{
    align-items: center;
    display: flex;
    justify-content: center;
}

.button{
    color: black;
    text-decoration: none;
    position: relative;
    padding: 20px 30px;
    display: flex;
    align-items: center;
    transition: all 1s;
    margin-top: 50px;
}

.button:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: rgba(30, 233, 186, .3);
    width: 56px;
    height: 56px;
    transition: all 1s;
}

.button span{
    position: relative;
    line-height: 1;
    font-weight: 500;
    letter-spacing: 0;
    padding-left: 20px;
    text-transform: uppercase;   
}

.button svg{
    position: relative;
    top: 0;
    margin-left: 10px;
    fill: none;
    stroke-linecap: round;
    stroke: rgb(0, 0, 0);
    stroke-width: 2;
    transform: translateX(-5px);
    transition: all 1s;
}

.button:hover{
    color: black;
}

.button:hover:before{
    width: 100%;
    background: rgb(1, 233, 214);
}

.button:hover svg{
    stroke: black;
    transform: translateX(0);
}

#canhbao{
    padding-top: -20px;
    position: absolute;
    margin-left: 5px;
}
h3{
    margin-bottom: 25px;
}

#id_dm select{
    width: 100%;
    height: 100%;
    border-radius: 5px;
}
#id_dm{
    height: 50px;
    margin-bottom: 35px;
}

#tensanpham{
    margin-bottom: 35px;        
}

#tonkho{
    margin-bottom: 35px;        
}

#anh{
    margin-bottom: 35px;        
}

#gia{
    margin-bottom: 35px;       
}

#xuatxu{
    margin-bottom: 35px;       
}

#trangthai{
    margin-bottom: 35px;       
}

#daban{
    margin-bottom: 35px;       
}
    </style>
</head>
<body>
<div class="container">
    <form action="#" method="post"  enctype="multipart/form-data">
        <div>
            <h3 class="text-uppercase text-center">Cập nhật sản phẩm</h3>
        </div>
        <h6>Tên danh mục:</h6>
        <div id="id_dm"  >
        
            
            <select name="id_dm"  >
                <option value="1"<?php if ($data_sanpham[0]['id_danhmuc']==1) {
                    echo "selected";
                } ?>>Áo nữ</option>
                <option value="2"<?php if ($data_sanpham[0]['id_danhmuc']==2) {
                    echo "selected";
                } ?>>Quần nữ</option>
                <option value="3"<?php if ($data_sanpham[0]['id_danhmuc']==3) {
                    echo "selected";
                } ?>>Váy đầm nữ</option>
                <option value="4"<?php if ($data_sanpham[0]['id_danhmuc']==4) {
                    echo "selected";
                } ?>>Áo nam</option>
                <option value="5"<?php if ($data_sanpham[0]['id_danhmuc']==5) {
                    echo "selected";
                } ?>>Quần nam</option>
                <option value="6"<?php if ($data_sanpham[0]['id_danhmuc']==6) {
                    echo "selected";
                } ?>>Vest nam</option>
                <option value="7"<?php if ($data_sanpham[0]['id_danhmuc']==7) {
                    echo "selected";
                } ?>>Áo trẻ em</option>
                <option value="8"<?php if ($data_sanpham[0]['id_danhmuc']==8) {
                    echo "selected";
                } ?>>Quần trẻ em</option>
                <option value="9"<?php if ($data_sanpham[0]['id_danhmuc']==9) {
                    echo "selected";
                } ?>>Bộ quần áo trẻ em</option>
            </select>
        </div>

        <h6>Tên sản phẩm:</h6>
        <div id="tensanpham" class="form-control row mx-1">
            <input name="tensanpham" type="text" placeholder="Hãy điền tên sản phẩm..." 
            value="<?php echo $data_sanpham[0]['tensanpham'] ?>" >
        </div>

        <h6>Ảnh sản phẩm:</h6>
        <div id="anh" class="form-control row mx-1">
            <input name="anh_chinh[]"  type="file" value="
            <?php if (isset( $data_sanpham[0]['anh_chinh'])) { ?>
                <?php echo $data_sanpham[0]['anh_chinh'] ?> <?php } ?>" >
            <?php if (isset( $data_sanpham[0]['anh_chinh'])) { ?>          
            <img  src="../images/sanpham/<?php echo $data_sanpham[0]['anh_chinh'] ?>" alt="">
       <?php } ?>
        </div>

        <h6>Tồn kho:</h6>
        <div id="tonkho" class="form-control row mx-1">
            <input name="tonkho" type="text" placeholder="Số hàng tồn..." 
            value="<?php echo $data_sanpham[0]['tonkho'] ?>" >
        </div>

        <h6>Giá trị:</h6>
        <div id="gia" class="form-control row mx-1">
            <input name="gia" type="text" placeholder="Giá của 1 sản phẩm?..." 
            value="<?php echo $data_sanpham[0]['gia'] ?>" >
        </div>

        
        <h6>Xuất xứ:</h6>
        <div id="xuatxu" class="form-control row mx-1">
            <input name="xuatxu" type="text" placeholder="Nơi ở hiện tại..." 
            value="<?php echo $data_sanpham[0]['xuatxu'] ?>" >
        </div>

        

        <h6>Đã bán:</h6>
        <div id="daban" class="form-control row mx-1">
            <input name="daban" type="text" placeholder="Đã bán được ..." 
            value="<?php echo $data_sanpham[0]['daban'] ?>" >
        </div>

        <button type="submit" style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_suasanpham" onclick="return confirm('Bạn đồng ý sửa?');">
          
            <!-- <svg width="13px" height="10" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
            </svg> -->
            Cập nhật</button>
           
    </form>    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>