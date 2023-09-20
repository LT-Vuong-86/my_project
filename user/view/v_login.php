<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: "Ubuntu";
            color: #000;
            transition: all 1s;
        }

        html, body{
            height: 100%;  
        }

        .container{
            width: 400px;
            border: 1px solid black;
            border-radius: 10px;
            padding: 40px;
        }

        .container h2{
            text-align: center;
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
            display: flex;
            align-items: center;
            transition: all .3s;
            cursor: pointer;
            border-radius: 18px;
            background: #E0FFFF;
        }

        .button:hover{
            color: black;
            background: #fe890f;
        }

        .button span{
            position: relative;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        .button:active{
            transform: scale(.95);
        }
        
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        
        #canhbao{
            position: absolute;
            margin-top: -20px;
            margin-left: 0px;
        }
        
        .dangky{
            padding-top: 5px;
            text-align: end;
        }

        .dangky a:hover{
            color: crimson;
        }
    
       
    </style>
   </head><!--/head-->

<body>
    <section id="form">
        <!--form-->
        <div class="container">
            <div id="form-login-over" class="row" class="col-md-4 col-md-offset-5">
                <div class="col-sm-12">
                    <div class="login-form">
                        <!--login form-->
                        <h2 style="text-align:center">Bạn đã là khách hàng</h2>
                        <form action="#" method="post">
                            <div class="row mt-5">
                                <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control col-md-6" 
                                value="<?php echo (isset($username))?$username:'' ?>">
                            </div>
                            <div id="canhbao" class="row mt-1">
                                <?php if (isset($loi['username'])) {?>
                                    <p class="text-danger"><?php echo $loi['username'] ?></p>			
                                <?php } ?>
                            </div>

                            <div class="row mt-5">
                                <input type="password" name="pass" placeholder="Mật khẩu" class="form-control col-md-6" 
                                value="<?php echo (isset($password))?$password:'' ?>">
                            </div>
                            <div id="canhbao" class="row mt-1">
                                <?php if (isset($loi['pass'])) {?>
                                    <p class="text-danger"><?php echo $loi['pass'] ?></p>			
                                <?php } ?>
                            </div>

                            <input class="button" type="submit" name="btn_log" value="Đăng Nhập">
                        
                            
                            <div class="dangky">
                                <h5>Nếu chưa hãy <span><a href="?controller=signup">Đăng ký</a></span></h5>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>