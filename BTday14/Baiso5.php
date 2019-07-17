<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài 5</title>
    <style>
        .content1 {
            color: red;
        }

        .content2 {
            margin-left: 39%;
        }

        .content3 {
            color: green;
            margin-left: 39%;
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ComfirmPassword = $_POST['ComfirmPassword'];
    if (empty($FirstName)) {
        $error1 = "<p class='content1'>Please enter your Firstname</p>";
    } elseif (empty($LastName)) {
        $error2 = "<p class='content1'>Please enter your Lastname</p>";
    } elseif (empty($UserName)) {
        $error3 = "<p class='content1'>Please enter your Username</p>";
    } elseif (empty($email)) {
        $error4 = "<p class='content1'>Please enter your Email</p>";
    } elseif (empty($password)) {
        $error5 = "<p class='content1'>Please enter your Password</p>";
    } elseif ($ComfirmPassword != $password) {
        $error6 = "<p class='content1'>The cofirm password entered is not correct";
    } else {
        $error7 = "<p class='content3'>Đăng kí thành công!</p>
        <p class='content3'>Thông tin của bạn:</p>
        <p class='content2'>Firstname: $FirstName </p>
        <p class='content2'>Lastname: $LastName </p>
        <p class='content2'>Username: $UserName </p>
        <p class='content2'>Email: $email </p>";
    }
}
?>
<form action="" method="post" style="width: 40%; margin:  0 auto">
    <h2>Register</h2>
    <hr/>
    <table align="center">
        <tr>
            <td>Firstname:</td>
            <td>
                <input type="text" name="FirstName"
                       value="<?php echo isset($_POST['FirstName']) ? $_POST['FirstName'] : '' ?>"/> <br/>
                <?php echo isset($error1) ? $error1 : '' ?>
            </td>
        </tr>
        <tr>
            <td>Lastname:</td>
            <td>
                <input type="text" name="LastName"
                       value="<?php echo isset($_POST['LastName']) ? $_POST['LastName'] : '' ?>"/> <br/>
                <?php echo isset($error2) ? $error2 : '' ?>
            </td>
        </tr>
        <tr>
            <td>Username:</td>
            <td>
                <input type="text" name="UserName"
                       value="<?php echo isset($_POST['UserName']) ? $_POST['UserName'] : '' ?>"/> <br/>
                <?php echo isset($error3) ? $error3 : '' ?>
            </td>
        </tr>
        <tr>
            <td>Email Address:</td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
                <br/>
                <?php echo isset($error4) ? $error4 : '' ?>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password"
                       value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"/> <br/>
                <?php echo isset($error5) ? $error5 : '' ?>
            </td>
        </tr>
        <tr>
            <td>Comfirm Password:</td>
            <td>
                <input type="password" name="ComfirmPassword"
                       value="<?php echo isset($_POST['ComfirmPassword']) ? $_POST['ComfirmPassword'] : '' ?>"/> <br/>
                <?php echo isset($error6) ? $error6 : '' ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input style="background: blue; color: white; border: none" type="submit" name="submit" value="Save">
            </td>
        </tr>
    </table>
    <br/>
    <?php echo isset($error7) ? $error7 : '' ?>

</form>


</body>
</html>