<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bài 3</title>
    <style>
        form{
            margin: 5px auto;
            background: #f6f5f6;
            width: 35%;
            padding: 1%;
        }
        input[type=text], input[type=file], input[type=submit]{
            width: 97%;
            background: #eeeeee;
            border: 1px gainsboro solid;
            margin: 5px auto;
            padding: 5px;


        }
        textarea{
            background: #eeeeee;
            width: 98%;
            height: 100px;
            border: 1px gainsboro solid;

        }
        p, span{
            margin-left: 35%;
        }
        .content1{
            margin-left: 40%;
        }
    </style>

</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    Text <br/>
    <input type="text" name="name" placeholder="User Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/> <br/>
    Checkbox <br/>
    <input type="checkbox" name="checkbox[]" value="1"> Checkbox1 <br/>
    <input type="checkbox" name="checkbox[]" value="2"> Checkbox2 <br/>
    <input type="checkbox" name="checkbox[]" value="3"> Checkbox3 <br/>
    Textarea <br/>
    <textarea name="textarea"><?php echo isset($_POST['textarea']) ? $_POST['textarea'] : '' ?></textarea><br/>
    Radio button <br/>
    <input type="radio" name="radio" checked="checked" value="1"> yep <br/>
    <input type="radio" name="radio" value="2"> nope <br/>
    <input type="radio" name="radio" value="3"> none <br/>
    Select <br/>
    <select name="select">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    Upload file <br/>
    <input type="file" name="upload"> <br/>
    <input style="width: 100%" type="submit" name="submit" value="Submit">

</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $textarea = $_POST['textarea'];
    if(empty($name)){
        echo '<p style="color: red">Trường text không được để trống</p>';
    }
    elseif (isset($_POST['checkbox']) == false) {
        echo '<p style="color: red">Cần check ít nhất 1 trường checkbox</p>';
    }
    elseif(empty($textarea)){
        echo '<p style="color: red">Trường textarea không được để trống</p>';
    }
    elseif (isset($_POST['radio']) == false) {
        echo '<p style="color: red">Cần check ít nhất 1 trường radio</p>';
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
                        echo '<p style="color: blue; font-weight: bold">Thông tin user:</p>';
                        echo "<p>Text: $name </p>";
                        $checkboxArr = $_POST['checkbox'];
                        echo '<p>Identify courses taken:<p>';
                        echo '<p style="display: inline-block" >Checkbox: </p>  ';
                        foreach ($checkboxArr as $value) {
                            if ($value == 1) {
                                echo 'Checkbox1    ';
                            }
                            else if ($value == 2) {
                                echo 'Checkbox2    ';
                            }
                            else{
                                echo 'Checkbox3';
                            }

                        }
                        echo "<p>Textarea: $textarea </p>";
                        $radio = $_POST['radio'];
                        if ($radio == 1) {
                            echo '<p>Radio: yep</p>';
                        } elseif ($radio == 2) {
                            echo '<p>Radio: nope</p>';
                        }
                        else{
                            echo '<p>Radio: none</p>';
                        }
                        $select = $_POST['select'];
                        echo '<p style="display: inline-block" >Select: </p>  ';
                        if ($select == 1) {
                            echo 'Option1    ';
                        }
                        elseif($select == 2) {
                            echo 'Option 2    ';
                        }
                        else {
                            echo 'Option 3';
                        }

                        $img = $file['name'];
                        echo "<p>Upload file</p>";
                        echo "<p><img width='150px' height='120px' src='uploads/$img'> </p>";

                    }
                    else {
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