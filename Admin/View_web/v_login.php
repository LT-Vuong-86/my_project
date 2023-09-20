<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Login-site</title>
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
            background-image: url("img/low-poly-grid-haikei.svg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Ubuntu";
            color: #000;
            animation: rotate 6s infinite alternate linear;
            transition: all 1s;
        }

        .container{
            width: 400px;
            border: 1px solid black;
            border-radius: 10px;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px black;
        }

        .container h2{
            text-align: center;
        }
        .form-control{
            width: 100%;
            position: relative;
            border: none;
        }

        
        .form-control span{
            position: absolute;
        }

        .form-control .input {
            border: none;
            outline: none;
            border-radius: 15px;
            padding: 1em;
            background-color: #ccc;
            box-shadow: inset 2px 5px 10px rgba(0,0,0,0.3);
            transition: 300ms ease-in-out;
            }

        .form-control .input:focus {
            background-color: white;
            transform: scale(1.05);
            box-shadow: 13px 13px 30px #969696,
                        -13px -13px 30px #ffffff;
            }

        .signup-link{
            margin-top: 30px;
            text-align: center;
        }

        .signup-link a{
            text-decoration: none;
            cursor: pointer;
        }

        .signup-link a:hover{
            color: red;
            text-decoration: underline;
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
            background-color: white;
            transform: scale(1.05);
            box-shadow: 13px 13px 30px #969696,
                        -13px -13px 30px #ffffff;
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

        .button:active{
            transform: scale(.95);
        }
        #canhbao{
            position: absolute;
            margin-left: 5px;
        }
        #matkhau{
            margin-top: 35px;
        }

        @keyframes rotate{
            100%{
                background-position: 15% 50%;
            }
        }

        @media (width >= 500px){
            body{
                padding: 0;
            }
            .container{
                margin: 0;
                width: 400px;
            }
        }
        h2{
            font-size:xx-large;
        }

    </style>
</head>
<body>
<div class="container">
    <form action="?controller=login" method="post">
        <div><h2 class="text-uppercase text-center">Đăng nhập</h2></div>
        <?php if(isset($loi['admin'])){?>
                <p class="text-danger"><?php echo $loi['admin']?></p> 
            <?php }?>
        <div class="form-control row mx-1">
            <input class="input" name="username"  type="text" placeholder="Tên đăng nhập" 
            value="<?php echo (isset($username))?$username:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['username'])){?>
                <p class="text-danger"><?php echo $loi['username']?></p> 
            <?php }?>
        </div> 

        <div id="matkhau" class="form-control row mx-1">
            <input class="input" name="password" type="password" placeholder="Mật khẩu" 
            value="<?php echo (isset($password))?$password:'' ?>" >
        </div>
        <div id="canhbao" class="row mt-2">
            <?php if(isset($loi['password'])){?>
                <p class="text-danger"><?php echo $loi['password']?></p> 
            <?php }?>
        </div>
    
        <button style="border: none; border-radius:25px; background: white; width: 100%;" 
        class="button" name="btn_login" type="submit">
            <span>Đăng nhập</span>
            <svg width="13px" height="10" viewBox="0 0 13 10">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
            </button>
    </form>    
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>