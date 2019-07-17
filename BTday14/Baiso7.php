<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài 7</title>
    <style>
        p{
            margin-left: 42%;
            color: red;
        }
        input{
            width: 80%;
            margin: 10px auto;
            padding: 5px;
        }
        input[type="submit"]{
            background: red;
            color: white;
            border: none;
            padding: 10px;
            font-weight: bold;
            font-size: 15px;
        }
    </style>
</head>
<body>
<form action="" method="post" style="width: 30%; margin: 50px auto; background: #dfdfdf;  text-align: center ">
    <input type="text" name="name" placeholder="Your name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"> <br/>
    <input type="email" name="email" placeholder="Your Email Address" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"> <br/>
    <input type="number" name="phone" placeholder="Your Phone Number" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>"> <br/>
    <input type="text" name="website" placeholder="Your Web Site starts with http://..." value="<?php echo isset($_POST['website']) ? $_POST['website'] : '' ?>"> <br/>
    <textarea name="detail" cols="44%" rows="6"><?php echo isset($_POST['detail']) ? $_POST['detail'] : '' ?></textarea>
    <input type="submit" name="submit" value="SUBMIT">


</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $detail = $_POST['detail'];
    if(empty($name) || empty($name) || empty($phone) || empty($website) || empty($detail)){
        echo '<p>Không được để trống các trường</p>';
    }
    elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
        echo '<p>Trường website cần phải có định dạng URL</p>';

    }

    else {
        echo "<p style='color: green'>Send contact thành công!</p>";
        echo "<p>Your Name: $name </p>";
        echo "<p>Your Email: $email </p>";
        echo "<p>Your Phone: $phone </p>";
        echo "<p>Your Website: $website </p>";
        echo "<p>Your message: $detail </p>";

    }
}


?>
</body>
</html>