<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài số 2</title>

</head>
<?php
if (isset($_POST['submit'])) {
    $erro1 = '';
    $erro2 = '';
    $erro3 = '';
    $erro4 = '';
    $erro5 = '';
    $sucess = '';
    if(empty($_POST['name'])){
        $erro1 = '<p style="color: red">Không được để trống trường này</p>';
    }
    else{
        if (isset($_FILES['upload'])) {
            $file = $_FILES['upload'];
            $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
            if ($file['error'] == 4) {
                $erro2 = '<p style="color: red">Bạn chưa chọn file upload</p>';
            } else {
                if (in_array($extension, ['png', 'gif', 'jpg', 'jpeg']) == false) {
                    $erro3 = '<p style="color: red">Cần upload file có định dạng ảnh</p>';
                } elseif ($file['size'] > 2097152) {
                   $erro4 = '<p style="color: red">File upload không được > 2Mb</p>';

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
                        $sucess = 'Ảnh vừa upload: <br/>'
                        ."<img width='150px' height='120px' src='uploads/$name'> <br/>"
                       .'Tên file: ' .$file['name'] . '<br />'
                       .'Định dạng file: ' .$file['type'] .'<br />';
                    } else {
                        $erro5 = '<p style="color:red">Quá trình upload file xảy ra lỗi</p>';
                    }
                }
            }

        }
    }


}
?>
<body>
<h3>Upload Avatar</h3>
<form action="" method="POST" enctype="multipart/form-data">
    User Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"> <br/> <br/>
    <?php echo isset($erro1) ? $erro1 : '' ?>
    Choose image: <input type="file" name="upload"/>
    <?php echo isset($erro2) ? $erro2 : '' ?>
    <?php echo isset($erro3) ? $erro3 : '' ?>
    <?php echo isset($erro4) ? $erro4 : '' ?>
    <br/> <br/>
    <input type="submit" name="submit" value="Upload"
           style="padding: 15px 25px;
            background: blue;
            color: white;
            font-size: 15px ;
            font-weight: bold;
            border: none;
            border-radius: 5px;
"
    />
</form>
<?php echo isset($sucess) ? $sucess : '' ?>
<?php echo isset($erro5) ? $erro5 : '' ?>

<?php echo '<pre>';  echo isset($_FILES['upload']) ? print_r($_FILES) : '' ?>
</body>
</html>