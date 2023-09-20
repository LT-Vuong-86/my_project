<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cập nhật nhân viên</title>
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

#username{
    margin-bottom: 35px;
}

#full_name{
    margin-bottom: 35px;        
}

#email{
    margin-bottom: 35px;        
}

#sdt{
    margin-bottom: 35px;        
}

#vaitro{
    margin-bottom: 35px;       
}

#diachi{
    margin-bottom: 35px;       
}


        
    </style>
</head>
<body>
<div class="container">
    <form action="#" method="post">
        <div>
            <h3 class="text-uppercase text-center">Sửa thôn tin khách hàng</h3>
        </div>
        <h6>Tên khách hàng:</h6>
        <div id="username" class="form-control row mx-1">
            <input name="username" type="text" placeholder="Hãy điền tên đăng nhập..." 
            value="<?php echo $data_nhanvien[0]['username'] ?>" >
        </div> 



        <h6>Số điện thoại:</h6>
        <div id="sdt" class="form-control row mx-1">
            <input name="sdt" type="text" placeholder="Hãy điền số điện thoại..." 
            value="<?php echo $data_nhanvien[0]['sdt'] ?>" >
        </div>

        <h6>Email:</h6>
        <div id="email" class="form-control row mx-1">
            <input name="email" type="text" placeholder="Hãy điền email..." 
            value="<?php echo $data_nhanvien[0]['email'] ?>" >
        </div>



        
        <h6>Địa chỉ:</h6>
        <div id="diachi" class="form-control row mx-1">
            <input name="diachi" type="text" placeholder="Nơi ở hiện tại..." 
            value="<?php echo $data_nhanvien[0]['diachi'] ?>" >
        </div>

        <button type="submit" style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_suanhanvien" onclick="return confirm('Bạn đồng ý sửa?');">
          
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