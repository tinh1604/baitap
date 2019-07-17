<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login_success</title>
    <style>
        #block1{
            margin:10% 30%;
        }
        a{
           font-weight: bold;
            color: blue;
            text-decoration: none;
        }
        input[type=submit]{
            background: blue;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
<div id="block1">
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    session_start();

    $date = date('d-m-y H:i:s', time());
    echo "<p style='color: blue'>Đăng nhập thành công!: </p>";
    $_SESSION['logout'] = 'Bạn đã đăng xuất khỏi hệ thống';
    if(isset($_SESSION['name'])){
        echo "<span>Chào mừng bạn: </span>". $_SESSION['name'];echo '<br/>';
        echo "<p >Thời gian hiện tại đang login: $date</p>";
        unset($_SESSION['name']);
    }
    else{
        if(isset($_COOKIE['username'])){
            echo "<span>Chào mừng bạn: </span>". $_COOKIE['username'];echo '<br/>';
            echo "<p >Thời gian hiện tại đang login: $date</p>";
        }
        else{
            header('Location: index.php');
            $_SESSION['chuadangnhap'] = '<p style="color: red">Bạn cần đăng nhập để có thể truy cập trang này</p>';
            unset($_SESSION['logout']);
        }

    }


    ?>


    <?php

    if(isset($_POST['submit'])){
        setcookie('username', $_COOKIE['username'], time() -10);
        setcookie('password', $_COOKIE['password'], time() -10);
        setcookie('password', $_COOKIE['dangnhapok'], time() -10);
        header('Location: index.php');

    }
    ?>
    <form action="" method="post">
       <input type='submit' name='submit' value= 'Logout' />
    </form>

    <?php
    if (isset( $_COOKIE['dangnhapok'])){
        echo  $_COOKIE['dangnhapok'];
    }
    ?>
</div>


</body>
</html>