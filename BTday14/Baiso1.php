<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài tập số 1</title>
    <style>
        p{
            margin-left: 45%;
        }
    </style>
</head>
<body>
<h3 style="text-align: center">Tutorials Point Absolute classes registration</h3>
<form action="" method="post">
    <table align="center">
        <tr>
            <td>Name: </td>
            <td>
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/>
            </td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
            </td>
        </tr>
        <tr>
            <td>Specific Time: </td>
            <td>
                <input type="time" name="time" value="<?php echo isset($_POST['time']) ? $_POST['time'] : '' ?>"/>
            </td>
        </tr>
        <tr>
            <td>Class details: </td>
            <td>
                <textarea cols="30" rows="6" name="detail"><?php echo isset($_POST['detail']) ? $_POST['detail'] : '' ?></textarea>
            </td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
                <input type="radio" name="gender" value="1"> Female
                <input type="radio" name="gender" value="2"> Male
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $detail = $_POST['detail'];
    if(empty($name)){
        echo '<p>Name không được để trống</p>';
    }
    elseif(empty($email)){
        echo '<p>Email không được để trống</p>';
    }
    elseif(empty($time)){
        echo '<p>Specific Time không được để trống</p>';
    }
    elseif(empty($detail)){
        echo '<p>Class details không được để trống</p>';
    }
    elseif(isset($_POST['gender']) == false ){
        echo '<p>Gender không được để trống</p>';
    }
    else {
        echo "<p style='font-size: 18px; font-weight: bold'>Your Given details are as: </p>";
        echo "<p>Name: $name </p>";
        echo "<p>Email: $email </p>";
        echo "<p>Time: $time </p>";
        echo "<p>Class details: $detail </p>";
        $gender = $_POST['gender'];
        if ($gender == 1) {
            echo '<p>Female </p>';
        } else {
            echo '<p>Male </p>';
        }
    }
}


?>
</body>
</html>