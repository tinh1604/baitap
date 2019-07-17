<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài số 1</title>

</head>
<body>
<h3>Select a file to upload</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload"/>
    <p style="color: darkgrey">Only jpg, jpeg, png, and gif file with maximum size of 1 MB is allowed</p>
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

<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
        $extension = strtolower(pathinfo($_FILES['upload']['name'], PATHINFO_EXTENSION));
        if ($file['error'] == 4) {
            echo '<p style="color: red">Bạn chưa chọn file upload</p>';
        } else {
            if (in_array($extension, ['png', 'gif', 'jpg', 'jpeg']) == false) {
                echo '<p style="color: red">Cần upload file có định dạng ảnh</p>';
            } elseif ($file['size'] > 1048576) {
                echo '<p style="color: red">File upload không được > 1Mb</p>';

            } else {
                //            tạo thư mục chứa file upload
                $upload_file = __DIR__ . '/uploads';
                if (!file_exists($upload_file)) {
                    mkdir($upload_file);
                }
                //            di chuyển file từ thư mục tạm vào thư mục đã tạo
                $isUploaded = move_uploaded_file($file['tmp_name'],
                    $upload_file . '/' . $file['name']);
                $name = $file['name'];
                if ($isUploaded) {
                    echo 'Ảnh vừa upload: <br/>';
                    echo "<img width='200px' height='120px'  src='uploads/$name'> <br/>";
                    echo 'Tên file: ' . $file['name'] . '<br />';
                    echo 'Định dạng file: ' . $file['type'] . '<br />';
                } else {
                    echo '<p style="color:red">Quá trình upload file xảy ra lỗi</p>';
                }
            }
        }
        echo '<pre>';
        print_r($_FILES); echo'<br/>';
    }
}
?>
</body>
</html>