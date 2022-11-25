

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../user/css/dangnhap.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo"><img src="./img/logo.jpg" alt=""></div>
        </header>
        <div class="login">
            <h1>Đăng nhập</h1>
            <form action="index.php" name="login"  method="POST">
                <div class="col">
                    <div class="form">
                        <label for="">Email</label><br>
                        <input name="email" type="email" placeholder="John.snow@gmail.com">
                        <p id="er_email" style="color:red ;"></p>
                    </div>
                </div>
                <div class="col">
                    <div class="form">
                        <label for="">Password</label><br>
                        <input name="password" type="password" placeholder="************">
                        <p id="er_password" style="color:red ;"></p>
                    </div>
                </div>
                <div class="btn1">
                    <button type="submit" >Đăng nhập</button>
                </div>
                <div class="btn2">
                    <button><img src="./img/iconfinder_Google_1298745 1.png" alt="">Đăng nhập với tài khoản Google</button>
                </div>
            </form>
            
            
        </div>
        <div class="forgot">
            <p><a href="">Quên mật khẩu?</a></p>
            <p><b>Bạn chưa có tài khoản?</b><a href="./dangki.php">Đăng kí ngay</a></p>

        </div>

        <?php
            require '../dao/pdo.php';
            require '../dao/khach_hang.php';
        ?>

        <?php
            session_start();
            if( isset($_SESSION['email'])){
                header('locatipn:index.php');
            }

            if( isset($_POST['dangnhap']) ){
                $email = $_POST['email'];
                $password = $_POST['password'];

                if($email == 'email' && $password == 'password'){
                    $_SESSION['email'] = $email;
                    header('location:index.php');
                }
                else{
                    echo " Tài khoản hoặc mật khẩu sai";
                }

                
            }

        ?>
    </div>