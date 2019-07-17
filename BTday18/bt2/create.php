<?php
//import file cấu hình DB
require_once 'config.php';
$errors = '';
//kiểm tra dữ liệu gửi lên khi submit form
if (isset($_POST['submit'])) {
//  echo "<pre>" . __LINE__ . ", " . __DIR__ . "<br />";
//  print_r($_POST);
//  echo "</pre>";
  $name = $_POST['name'];
//  die;
  //bắt điều kiện validate cho trường hợp name để trống
  if (empty($name)) {
    $errors = 'Name không đươc dể trống';
  } else {
    //gán giá trị cho các biến tương ứng
    //lưu ý nên sử dụng hàm mysqli_real_escape_string() với các string để convert các ký tự đặc biệt thành các ký tự an toán,
    // giúp tránh lỗi SQL Injection - là lỗi mà hacker tấn công vào CSDL của bạn
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    //thực hiện truy vấn thêm vào CSDL, sử dụng cú pháp {tên-biến} để tránh việc phải nối chuỗi
    //cần sử dụng cặp ký tư `` trước tên field để tránh bị lỗi cú pháp khi insert
    //lưu ý dữ liệu thêm cần đúng kiểu dữ liệu của trường trong CSDL
    $queryInsert = "
    INSERT INTO " . TABLE_EMPLOYEE . "(`name`, `description`, `salary`, `gender`, `birthday`) 
    VALUES('{$name}', '{$description}', {$salary}, {$gender}, '{$birthday}')";

    //truy vấn insert trả về boolean - true nếu insert thành công, ngược lại là false
    $isInsert = mysqli_query($connection, $queryInsert);
    //nếu insert thành công thì chuyển hướng user về trang index.php
    //đồng thời tạo session chứa message báo thành công
    if ($isInsert) {
      header("Location: index.php");
      $_SESSION['success'] = 'Tạo mới nhân viên thành công!';
    } else {
      $errors = "Có lỗi nào đó xảy ra, không thể insert dữ liệu!";
    }
  }
}
//đóng kết nối
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BT2 - Create</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="main container">
    <h2 class="heading">
        Create Record
    </h2>
    <!--    nếu có lỗi thì hiển thị lỗi bằng component alert của bootstrap-->
  <?php if (!empty($errors)): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $errors; ?>
      </div>
  <?php endif; ?>
    <form method="post" action="">
        <div class="form-group">
            <label>Name <span class="red">*</span></label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Desription</label>
            <textarea name="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label>Gender</label><br/>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" checked value="0">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="1">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="birthday" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="Save" name="submit" class="btn btn-primary"/>
            <a href="index.php" class="btn btn-light">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>
