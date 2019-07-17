<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        form {
            width: 20%;
            margin: 5% auto;
            background: #b6e0ff;
            padding: 20px;
            padding-left: 70px;
        }

        input[type=submit] {
            background: #65c370;
            padding: 5px;
            border: none;
            border-radius: 5px;
            margin-top: 15px;
            color: white;
            font-weight: bold;
        }
        p{
            margin-left: 40%;
        }


    </style>

</head>
<body>
<?php

session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $error = '';

    if ($name == '' || $password == '') {
        $error = 'Không được để trống username hoặc password';
    } else {
        if ($name == 'admin' && $password == 123456) {
            header('Location: login_success.php');
            $_SESSION['name'] = $name;

            if (isset($_POST['checkbox'])) {
                setcookie('username', $name, time() + 30);
                setcookie('password', $password, time() + 30);

            } else {
                setcookie('username', $name, time() - 1);
            }
        }
    }

}
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    header('Location: login_success.php');
    setcookie('dangnhapok', '<p style="color:blue">Bạn đã đăng nhập rồi, cần logout tài khoản nếu muốn quay trở lại màn hình login form</p>', time() + 30);

}

?>
<form action="" method="POST" enctype="multipart/form-data">
    Usernam: <br>
    <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>"/> <br><br>
    Pasword: <br>
    <input type="password" name="password" value="<?php echo isset($password) ? $password : '';  ?>"/> <br/><br>
    <input type="checkbox" name="checkbox"/> Remember me <br/>
    <input type="submit" name="submit" value="Login"/>

</form>
<p style="margin-left: 40%; color: red"><?php echo isset($error) ? $error : '' ?></p>

<p style="margin-left: 40%; color: red"><?php echo isset($_SESSION['logout']) ? $_SESSION['logout'] : '' ?></p>
<p style="margin-left: 40%; color: red"><?php echo isset($_SESSION['chuadangnhap']) ? $_SESSION['chuadangnhap'] : '' ?></p>


</body>
</html>