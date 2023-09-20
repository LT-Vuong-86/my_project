<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Thêm đơn hàng</title>
    <link rel="stylesheet" href="../css/v_add.css">
    <style>
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
    animation: rotate 0.5s infinite alternate linear;
    transition: all 0.5s;
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
    margin-bottom: 20px;
}
.form-control:hover{
    border: 1px solid var(--success-color);
    box-shadow: 2px 2px 2px blue;
}

li{
    list-style-type: none;
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
    transition: all 0.5s;
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

.text-danger{
    color: red;
}
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <h2 class="text-uppercase text-center">Thêm đơn hàng</h2>
        </div> 
        
        <p>Tên khách hàng</p>
        <div id="ten" class="form-control row mx-1">
            <input name="ten" type="text" placeholder="Tên người nhận" 
            value="<?php echo (isset($ten))?$ten:'' ?>" >
            <?php if(isset($loi['ten'])){?>
                <p class="text-danger"><?php echo $loi['ten']?></p> 
            <?php }?>
        </div>
        <p>Số điện thoại</p>
        <div id="sdt" class="form-control row mx-1">
            <input name="sdt" type="text" placeholder="Số điện thoại người nhận" 
            value="<?php echo (isset($sdt))?$sdt:'' ?>" >
            <?php if(isset($loi['sdt'])){?>
                <p class="text-danger"><?php echo $loi['sdt']?></p> 
            <?php }?>
        </div>
       
        <p>Địa chỉ</p>
        <div id="diachi" class="form-control row mx-1">
        
            <input name="diachi" type="text" placeholder="Địa chỉ nhận hàng" 
            value="<?php echo (isset($diachi))?$diachi:'' ?>" >
            <?php if(isset($loi['diachi'])){?>
                <p class="text-danger"><?php echo $loi['diachi']?></p> 
            <?php }?>
        </div>
       
        <p>Mã sản phẩm</p>
        <div id="masp" class="form-control row mx-1">
           
            <input   id="quantity" min="1" max="10" name="slmasp" pattern="[0-9]+"  type="number" placeholder="Số lượng mã sản phẩm" 
            value="<?php echo (isset($masp))?$masp:'' ?>" >
            <div id="inputs"></div>
            <?php if(isset($loi['masp'])){?>
                <p class="text-danger"><?php echo $loi['masp']?></p> 
            <?php }?>
        </div>

        <p>Tên loại sản phẩm</p>
        <div id="loaisp" class="form-control row mx-1">
            
            <input name="loai_sp" type="text" placeholder="Sản phẩm thuộc loại" 
            value="<?php echo (isset($tong))?$tong:'' ?>" >
            <?php if(isset($loi['loai_sp'])){?>
                <p class="text-danger"><?php echo $loi['loai_sp']?></p> 
            <?php }?>
        </div>

        <p>Kích cỡ:</p>
        <div id="size" class="form-control row mx-1">
            
            <input name="size" type="text" placeholder="Size" 
            value="<?php echo (isset($tong))?$tong:'' ?>" >
            <?php if(isset($loi['size'])){?>
                <p class="text-danger"><?php echo $loi['size']?></p> 
            <?php }?>
        </div>
        <p>Tổng tiền</p>
        <div id="size_name" class="form-control row mx-1">
            
            <input name="tong" pattern="[0-9]+" type="text" placeholder="Tổng tiền" 
            value="<?php echo (isset($tong))?$tong:'' ?>" >
            <?php if(isset($loi['tong'])){?>
                <p class="text-danger"><?php echo $loi['tong']?></p> 
            <?php }?>
        </div>
        <p>Ghi chú</p>
        <div id="ghichu" class="form-control row mx-1">
            
            <input name="ghichu" type="text" placeholder="Ghi chú..." 
            value="<?php echo (isset($ghichu))?$ghichu:'' ?>" >
            <?php if(isset($loi['ghichu'])){?>
                <p class="text-danger"><?php echo $loi['ghichu']?></p> 
            <?php }?>
        </div>
        


       
    
        <button style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_adddonhang" type="submit">
            <span>add</span>
            <svg width="13px" height="10" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
        </button>
    </form>    
</div>

<script>
  // Tạo một mảng để lưu trữ các ảnh được chọn
  const quantityInput = document.querySelector("#quantity");
const inputsContainer = document.querySelector("#inputs");

quantityInput.addEventListener("change", function() {
  const quantity = Number(quantityInput.value);
  for (let i = 0; i < quantity; i++) {
    const input = document.createElement("input");
    input.type = "text";
    input.name = "masp" + i;
    input.placeholder = "Nhập mã sản phẩm  mục " + (i + 1);
    inputsContainer.appendChild(input);
    const input1 = document.createElement("input");
    input1.type = "text";
    input1.name = "soluong" + i;
    input1.placeholder = "số lượng sản phẩm mục " + (i + 1);
    inputsContainer.appendChild(input1);
  }
});

</script>
</body>
</html>