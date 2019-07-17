<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>bài 3</title>
    <style>
        .content1 {
            text-align: right;
        }
        .content2 {
            color: red;
            margin-left: 40%;

        }

        .content3{
            color: green;
        }

        table {
            background: #ddeedd;
            margin-top: 50px;
        }
        p{
            margin-left: 40%;
        }

    </style>
</head>
<body>
<form action="" method="post">
    <table align="center"  cellpadding="6" width="30%">
        <tr>
            <td class="content1">
                Enter e-mai address:
            </td>
            <td>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content1">
                Enter password:
            </td>
            <td>
                <input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
            </td>
        </tr>
        <tr>
            <td class="content1">
                Select academic level:
            </td>
            <td>
                <select name="select">
                    <option value="1">Fresh Man</option>
                    <option value="2">Junior Man</option>
                    <option value="3">Senio Man</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="content1">
                Identify courses taken:
            </td>
            <td>
                <input type="checkbox" name="checkbox[]" value="1"> CSCI 1710 <br/>
                <input type="checkbox" name="checkbox[]" value="2"> CSCI 1800 <br/>
                <input type="checkbox" name="checkbox[]" value="3"> CSCI 2800 <br/>
                <input type="checkbox" name="checkbox[]" value="4"> CSCI 2150 <br/>
                <input type="checkbox" name="checkbox[]" value="5"> CSCI 2910 <br/>

            </td>
        </tr>
        <tr>
            <td class="content1">
                Select concentration:
            </td>
            <td>
                <input type="radio" name="radio" value="1"> Computer Science (CS) <br/>
                <input type="radio" name="radio" value="2"> Information Science (IS) <br/>
                <input type="radio" name="radio" value="3"> Information Technology (IT) <br/>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: center">
                <textarea cols="50" rows="6" name="detail"><?php echo isset($_POST['detail']) ? $_POST['detail'] : '' ?></textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: center">
                <input type="submit" name="submit" value="Submit Data">
            </td>
        </tr>
    </table>
</form>
</body>
<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)){
        echo '<p class="content2">Email không được để trống</p>';
    }
    elseif (empty($password)){
        echo '<p class="content2">Password không được để trống</p>';
    } elseif (strlen($password) < 8) {
        echo '<p class="content2">Password phải có độ dài tối thiểu 8 ký tự </p>';
    }
    elseif (isset($_POST['checkbox']) == false) {
        echo '<p class="content2"> Chưa chọn Identify courses taken: </p>';
    }
    elseif (isset($_POST['radio']) == false) {
        echo '<p class="content2">Chưa chọn Select concentration </p>';
    }
    else {
        echo "<p class='content3'>Đăng kí thành công!</p>";
        echo "<p class='content3'>Thông tin của bạn:</p>";
        echo "<p>Email: $email </p>";
        echo "<p>Password: $password </p>";

        $select = $_POST['select'];
        if ($select == 1) {
            echo '<p>Select academic level: Fresh Man</p>';
        }
        elseif($select == 2) {
            echo '<p>Select academic level: Junior Man</p>';
        }
        else {
            echo '<p>Select academic level: Senio Man</p>';
        }
        $checkboxArr = $_POST['checkbox'];
        echo '<p>Identify courses taken:<p>';
        foreach ($checkboxArr as $value) {
            if ($value == 1) {
                echo '<p>CSCI 1710<p>';
            }
            else if ($value == 2) {
                echo '<p>CSCI 1800 (IS)<p>';
            }
            else if ($value == 3) {
                echo '<p>CSCI 2800 (IS)<p>';
            }
            else if ($value == 4) {
                echo '<p>CSCI 2150 <p>';
            }
            else {
                echo '<p>CSCI 2910 <p>';
            }
        }

        $radio = $_POST['radio'];
        if ($radio == 1) {
            echo '<p>Select concentration: Computer Science (CS)</p>';
        } elseif ($radio == 2) {
            echo '<p>Select concentration: Information Science (IS)</p>';
        }
        else{
            echo '<p>Select concentration: Information Technology (IT)</p>';
        }




    }
}


?>
</html>
