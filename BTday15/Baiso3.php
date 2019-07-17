<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài 3</title>
    <style>
        p{
            margin-left: 40%;
        }
        img {
            margin-left: 45%;
        }
        form{
            width: 30%;
            background: #142f44;
            margin: 0 auto;
            color: white;
            padding: 4%;
        }
        input{
            margin: 1%;
            width: 90%;
            background: #0b1923;
            padding: 5px;
            border: none;
            color: white;
        }
        input[type=submit]{
            background: #0a8cc9;
            border: none;
            padding: 5px;
        }
        input[type=file]{
            width: auto;
            border: none;
        }
    </style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <h3>Creat an account</h3>
    <input type="text" name="name" placeholder="User Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/> <br/>
    <input type="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/> <br/>
    <input type="password" name="password" placeholder="Password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"/> <br/>
    <input type="password" name="cfpassword" placeholder="Comfirm Password" value="<?php echo isset($_POST['cfpassword']) ? $_POST['cfpassword'] : '' ?>"/> <br/>
    Select your avatar: <input type="file" name="upload" /> <br/>
    <input type="submit" name="submit" value="Register">

</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];
    if(empty($name)){
        echo '<p style="color: red">Username không được để trống</p>';
    }
    elseif(empty($email)){
        echo '<p style="color: red">Email không được để trống</p>';
    }
    elseif(empty($password)){
        echo '<p style="color: red">Password không được để trống</p>';
    }
    elseif(empty($cfpassword)){
        echo '<p style="color: red">Confirm password không được để trống</p>';
    }
    elseif($password != $cfpassword ){
        echo '<p style="color: red">Trường confirm password phải giống trường Password</p>';
    }
    else {
        if (isset($_FILES['upload'])) {
            $file = $_FILES['upload'];
            if ($file['error'] == 4) {
                echo '<p style="color: red">Bạn chưa chọn file upload</p>';
            } else {
                $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
                if (in_array($extension, ['png', 'gif', 'jpg', 'jpeg']) == false) {
                    echo '<p style="color: red">Cần upload ảnh</p>';
                } else {
                    // tạo thư mục chứa file upload
                    $upload_file = __DIR__ . '/uploads';
                    if (!file_exists($upload_file)) {
                        mkdir($upload_file);
                    }
                    // di chuyển file từ thư mục tạm vào thư mục đã tạo
                    $isUploaded = move_uploaded_file($file['tmp_name'],
                        $upload_file . '/' . $file['name']);
                    if ($isUploaded) {
                        $name = $file['name'];
                        $sucess = '<p>Avartar:</p>'
                            ."<img width='150px' height='120px' src='uploads/$name'> <br/>";
                        echo "<p style='font-size: 18px; font-weight: bold'>Thông tin user nhập: </p>";
                        echo "<p>Name: $name </p>";
                        echo "<p>Email: $email </p>";
                        echo $sucess;
                    } else {
                        echo '<p style="color:red">Quá trình upload file xảy ra lỗi</p>';
                    }
                }
            }

        }


    }
}


?>
</body>
</html>