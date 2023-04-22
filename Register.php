<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Double Slider Login / Registration Form</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="StyleWeb/Register.css" />
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    lin
</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="connect/Registerphp.php" onsubmit="return validate_Register()" name="register" method="post">
                <h1>Đăng ký</h1>
                <input id="inputName" name="Name" type="text" placeholder="Họ và tên" pattern="{1-10}"
                    title="Name không được vượt quá 15 ký tự" />
                <p id="errorName" class="error"></p>
                <input id="inputEmail" name="Email" type="email" placeholder="Email" />
                <p id="errorEmail" class="error"></p>
                <input id="inputPhone" name="phone" type="number" placeholder="Số điện thoại"
                    pattern="/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/" title="sai rồi bạn ơi" />
                <p id="errorPhone" class="error"></p>
                <input id="inputPass" name="pass" type="password" placeholder="Mật khẩu"
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                    title="Tối thiểu tám ký tự, ít nhất một chữ cái và một số" />
                <p id="errorPass" class="error"></p>
                <button type="submit" name="btn-register">Đăng ký</button>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="#" onsubmit="return validation_Login()">
                <h1>Đăng nhập</h1>
                <input id="inputEmail_login" type="email" placeholder="Email" pattern="" />
                <p id="errorEmail_Login" class="error"></p>
                <input id="inputPass_Login" type="password" placeholder="Password" pattern="(?=.*[a-z]).{6}"
                    title="Phải có ít nhất 6 ký tự và tối thiểu 1 chữ thường" />
                <p id="errorPass_Login" class="error"></p>
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" />
                        <label>Nhớ mật khẩu</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Quên tài khoản</a>
                    </div>
                </div>
                <button id="btnDangnhap" ">Đăng nhập</button>
        </form>
      </div>
      <div class=" overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1 class="title">
                                Xin chào <br />
                                bạn
                            </h1>
                            <p>Nếu bạn đã có tài khoản, hãy đăng nhập ở đây.</p>
                            <button class="ghost" id="login">
                                Đăng nhập
                                <i class="lni lni-arrow-left login"></i>
                            </button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1 class="title">
                                Xin chào <br />
                                bạn
                            </h1>
                            <p>Nếu bạn chưa có một tài khoản hãy nhấn vào đây</p>
                            <button class="ghost" id="register">
                                Đăng ký
                                <i class="lni lni-arrow-right register"></i>
                            </button>
                        </div>
                    </div>
        </div>
    </div>
    <script src="filejs/script.js"></script>
    <script src="filejs/kiemtra.js"></script>
</body>

</html>