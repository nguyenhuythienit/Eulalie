<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
        box-sizing: border-box;
    }

    body {
        background: #f6f5f7;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
        margin-bottom: 0;
        background-color: #1a1a2e;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    button {
        border-radius: 20px;
        border: 1px solid #000099;
        background-color: #000099;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }
    .hover{
        border-radius: 20px;
        border: 1px solid #000099;
       
        color: black;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }
    .hover:hover{
        cursor: pointer;
        background-color: red;
    }

    button:active {
        transform: scale(0.95);
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
    }

    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container {
        transform: translateX(-100%);
    }

    .overlay {
        background: #663366;
        background: -webkit-linear-gradient(to right, #330099, #663366);
        background: linear-gradient(to right, #330099, #663366);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);
    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }

    footer {
        background-color: #222;
        color: #fff;
        font-size: 14px;
        bottom: 0;
        position: fixed;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 999;
    }

    footer p {
        margin: 10px 0;
    }

    footer i {
        color: red;
    }

    footer a {
        color: #3c97bf;
        text-decoration: none;
    }

    .sign-in-container {
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .trangchu {
        align-items: center;
        background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
        border: 0;
        border-radius: 8px;
        box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-family: Phantomsans, sans-serif;
        font-size: 20px;
        justify-content: center;
        line-height: 1em;
        max-width: 10%;
        min-width: 10px;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        cursor: pointer;
        margin-top: 50px;
    }

    .trangchu:active,
    .trangchu:hover {
        outline: 0;
    }

    @media (min-width: 768px) {
        .trangchu {
            font-size: 24px;
            min-width: 196px;
        }
    }

    h1 {
        color: white;
    }
    
    </style>
    <?php

        if(isset($_POST['dangky']) && ($_POST['dangky'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            GuiMail();
        }
    ?>
</head>
<?php
    function GuiMail(){

        require "./PHPMailer-master/src/PHPMailer.php";
        require "./PHPMailer-master/src/SMTP.php";
        require "./PHPMailer-master/src/Exception.php";
        
        
        $mail=new PHPMailer\PHPMailer\PHPMailer(true);
        
        try{
            $mail->SMTPDebug = 2; //hiện số 2 để kiểm tra cách hoạt động của hàm
            $mail->isSMTP();
            $mail->CharSet = "utf-8";
            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth =true;
            $mail->Username = 'trungvdps20080@fpt.edu.vn';
            $mail->Password = '272924598Tz';
            $mail->SMTPSecure = 'ssl'; //TLS/SSL
            $mail->Port = 465; //587/465
            // $mail->setOAuth($oauthTokenProvider);
    
            $mail->setFrom('trungvdps20080@fpt.edu.vn', 'EULALIE');
    
            
            $mail->addAddress("{$_POST['email']}","{$_POST['username']}");
            $mail->isHTML(true);
    
            $mail->Subject = 'Thư gửi từ form liên hệ';
    
            $noidungthu="<p>Cảm ơn bạn đã đăng kí tài khoản</p>";

            $noidungthu=file_get_contents("noidunglienhe.txt");
            $noidungthu=str_replace(
                ['{email}', '{username}','{password}'],[$_POST['email'],$_POST['username'],$_POST['password']],$noidungthu
            );
            $mail->Body=nl2br($noidungthu);
            $mail->smtpConnect(array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" =>false,
                    "allow_self_signed" => true
                )
    
                ));
                $mail->send();
                    
                    header("location:login.php");
                    echo 'Đã gửi mail xong';
            }catch(Exception $e){
                echo 'Mail không gửi được ' ,$mail->ErrorInfo;
            }
    
    }

?>
<body>
    
    <h1>Đăng ký</h1>
    <br>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="register.php" class="form">
                <h2>Đăng ký thành viên</h2>
                <input type="text" placeholder="User Name" name="username" value="" required />
                <input type="email" placeholder="Email" name="email" value="" required />
                <input type="password" placeholder="Password" name="password" value="" required />
                <input class="hover" type="submit" value="Đăng kí" name="dangky">
                <?php require 'xulydk.php'; ?>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <div class="dangnhap">
                <h2>Chào mừng trở lại!</h2>
                <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập với thông tin cá nhân của bạn</p>
                <button onclick="clicklogin()">Đăng nhập</button>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>Chào mừng trở lại!</h2>
                    <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập với thông tin cá nhân của bạn</p>
                    <button class="ghost" onclick="clicklogin()">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Chào bạn!</h2>
                    <p>Nhập chi tiết cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <button class="trangchu" onclick="clickindex()">Trang chủ</button>
    <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    function clicklogin() {
        window.location = "login.php";
    }

    function clickindex() {
        window.location = "index.php";
    }
    </script>
</body>

</html>
