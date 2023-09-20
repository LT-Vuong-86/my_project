<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>signup | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
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
            width: 650px;
            border: 1px solid black;
            border-radius: 10px;
            padding: 40px;
        }

        .container h2{
            margin-left: -10px;
            margin-top: -15px;
            margin-bottom: 15px;
            text-align: center;
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
    
        body input.button{
            align-items: center;
            display: flex;
            justify-content: center;
            background: #E0FFFF;
            color: black;
        }

        .button{
            width: 100%;
            text-decoration: none;
            position: relative;
            display: flex;
            align-items: center;
            transition: all .3s;
            cursor: pointer;
            border-radius: 18px;
            margin-top: 25px;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        .button:hover{
            color: black;
            background: #fe890f;
        }

        .button:active{
            transform: scale(.95);
        }

        #gender_male{
            float: left;
            margin-right: 15px;
        }
        #gender_female{
            float: left;
        }

        #role_nhanvien{
            float: left;
            margin-right: 15px;
        }
        #role_khachhang{
            float: left;
        }
        .form-check.form-check-inline{
            position: relative;
            width: 70px;
        }
        .form-check-input{
            padding-top: -20px;
            position: absolute;
        }

        .form-check-label{
            padding-left: 15px;
            width: 100px;
        }

        input[type="radio"], 
        input[type="checkbox"]{
            margin: -10px 0 0;
        }
    </style>
   </head><!--/head-->
<body>
	<div class="container">
        <form action="?controller=signup" method="post">
            <h2 class="h2h2h2">Đăng ký trở thành khách hàng mới</h2>
            <div class="col-sm-12">
                <div class="signup-form-tt row mt-5" >
                    <!--sign up form-->
                    <div class="col-sm-6 col-xs-12" >
                      <h5>Tên đăng nhập</h5>
                      <input type="text" name="username" pattern="^[a-zA-Z0-9]+$"  title="Tên đăng nhập cần phải viết liền ko dấu"  required class="col-sm-12 col-xs-12" placeholder="Tên đăng nhập" />
                    </div>

                    <div class="col-sm-6 col-xs-12" >
                      <h5>Họ và tên</h5>
                      <input type="text" name="full_name"  required class="col-sm-12 col-xs-12" placeholder="Tên đầy đủ" />
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <h5>Mật khẩu</h5>
                        <input class="col-sm-12 col-xs-12"  minlength="6" name="pass"  required type="password" placeholder="Mật khẩu" />
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <h5>Email</h5>
                        <input class="col-sm-12 col-xs-12" name="email" type="email" placeholder="Email" />
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <h5>Điện thoại</h5>
                        <input class="col-sm-12 col-xs-12" type="tel" pattern="[0-9]{10}" title="Hãy nhập lại." required name="sdt"  placeholder="Điện thoại" />
                    </div>
                    
                    <div class="col-sm-6 col-xs-12">
                        <h5>Vai trò</h5>
                        <div >
                            <div id="role_khachhang" class="form-check form-check-inline">
                                <input class="form-check-input" name="vaitro" type="radio" checked id="nguoidung" value="user"/>
                                <label class="form-check-label" for="nguoidung">Người dùng</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <h5>Địa chỉ</h5>
                        <input class="col-sm-12 col-xs-12" type="text"  pattern="^[a-zA-Z0-9- ]+$"  required name="diachi" placeholder="Nơi ở hiện tại"></input>
                    </div>
                
                    <div class="col-sm-12 col-xs-12">
                        <input type="submit" class="button" name="btn_signup" value="đăng ký ">
                    </div>
                </div>
                <!--/sign up form -->
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
	var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
var Parameter = {
  url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
  method: "GET", 
  responseType: "application/json", 
};
var promise = axios(Parameter);
promise.then(function (result) {
  renderCity(result.data);
});

function renderCity(data) {
  for (const x of data) {
	var opt = document.createElement('option');
	 opt.value = x.Name;
	 opt.text = x.Name;
	 opt.setAttribute('data-id', x.Id);
	 citis.options.add(opt);
  }
  citis.onchange = function () {
    district.length = 1;
    ward.length = 1;
    if(this.options[this.selectedIndex].dataset.id != ""){
      const result = data.filter(n => n.Id === this.options[this.selectedIndex].dataset.id);

      for (const k of result[0].Districts) {
		var opt = document.createElement('option');
		 opt.value = k.Name;
		 opt.text = k.Name;
		 opt.setAttribute('data-id', k.Id);
		 district.options.add(opt);
      }
    }
  };
  district.onchange = function () {
    ward.length = 1;
    const dataCity = data.filter((n) => n.Id === citis.options[citis.selectedIndex].dataset.id);
    if (this.options[this.selectedIndex].dataset.id != "") {
      const dataWards = dataCity[0].Districts.filter(n => n.Id === this.options[this.selectedIndex].dataset.id)[0].Wards;

      for (const w of dataWards) {
		var opt = document.createElement('option');
		 opt.value = w.Name;
		 opt.text = w.Name;
		 opt.setAttribute('data-id', w.Id);
		 wards.options.add(opt);
      }
    }
  };
}
	</script>
</body>
</html>