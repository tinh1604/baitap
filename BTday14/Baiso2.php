<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>bài 2</title>
    <style>
        .content1 {
            text-align: center;
            background: #95bee6;
        }

        .content2 {
            text-align: right;

        }

        tr {
            background: #a7d6f1;
            color: white;
        }
        p{
            margin-left: 40%;
        }

    </style>
</head>
<body>
<form action="" method="post">
    <table align="center" cellspacing="2" cellpadding="6" width="30%">
        <tr style="background: #95bee6">
            <td colspan="2" class="content1">
                Registration Form
            </td>
        </tr>
        <tr>
            <td class="content2">
                Username
            </td>
            <td>
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content2">
                Password
            </td>
            <td>
                <input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content2">
                User Type
            </td>
            <td>
                <select name="select">
                    <option value="1">Select 1</option>
                    <option value="2">Select 2</option>
                    <option value="3">Select 3</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="content2">
                Display Name
            </td>
            <td>
                <input type="text" name="DisplayName" value="<?php echo isset($_POST['DisplayName']) ? $_POST['DisplayName'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content2">
                Address
            </td>
            <td>
                <textarea cols="30" rows="6" name="address"><?php echo isset($_POST['address']) ? $_POST['address'] : '' ?></textarea>
            </td>
        </tr>
        <tr>
            <td class="content2">
                Email
            </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content2">
                Gender
            </td>
            <td>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <input type="checkbox" name="checkbox" value=""> I accept Terms Conditions
            </td>
        </tr>
        <tr style="background: #95bee6">
            <td class="content1" colspan="2">
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
</body>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $DisplayName = $_POST['DisplayName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    if (empty($name) || empty($password) || empty($DisplayName) || empty($address) || empty($email) ||
       isset($_POST['gender']) == false || isset($_POST['checkbox']) == false) {
        echo '<p>Tất cả các trường không được để trống</p>';
    } elseif (strlen($password)>24) {
        echo '<p>Display Name không được vượt quá 24 ký tự </p>';
    }
    else {
        echo "<p>Username: $name </p>";
        echo "<p>Password: $password </p>";
        echo "<p>Display name: $DisplayName </p>";
        echo "<p>Address: $address </p>";
        echo "<p>Email: $email </p>";
        $gender = $_POST['gender'];
        if ($gender == 'male') {
            echo '<p>Gender: Male </p>';
        } else {
            echo '<p>Gender: Female </p>';
        }
        $select = $_POST['select'];
        if ($select == 1) {
            echo '<p>Select 1</p>';
        }
        elseif($select == 2) {
            echo '<p>Select 2</p>';
        }
        else {
            echo '<p>Select 3</p>';
        }

    }
}


?>
</html>
