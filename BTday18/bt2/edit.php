<?php
//MÀN HÌNH EDIT - VỀ CĂN BẢN HIỂN THỊ VÀ LOGIC SAVE SẼ GIỐNG MÀN HÌNH CREATE
//TRONG THỰC TẾ CÓ THỂ SỬ DỤNG CHUNG FORM CHO CẢ 3 CHỨC NĂNG CREATE - EDIT - VIEW
//import file cấu hình DB
require_once 'config.php';
//trường hợp không truyền id, hoặc có truyền id nhưng ko phải là 1 số thì cần báo lỗi
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  //gán session lỗi, chuyển hướng về trang list employees
  $_SESSION['error'] = 'ID employee không hợp lệ';
  header("Location: index.php");
}
$id = $_GET['id'];
//thực thi truy vấn select lấy dữ liệu của employees tương ứng trong bảng employees
//dựa vào id truyền vào
$querySelect = 'SELECT * FROM ' . TABLE_EMPLOYEE . " WHERE id=$id";
//truy vấn select sẽ trả về 1 mảng, không phải boolean như khi insert, delete hay update
$results = mysqli_query($connection, $querySelect);
//khởi tạo mảng rỗng cho biến employee để sử dụng trong trường hợp không có bản ghi nào
$employee = [];
//nếu có bản ghi thì set biến employees bằng mảng chứa các dữ liệu lấy được từ bảng employees
if (mysqli_num_rows($results) > 0) {
  $employee = mysqli_fetch_all($results, MYSQLI_ASSOC);
//  do câu lệnh truy vấn chỉ trả về đúng 1 bản ghi duy nhất với id truyền vào
//  nên có thể gán luôn bằng phần tử đầu tiên, để không phải sử dụng vòng lặp foreach để in ra kết quả
  $employee = $employee[0];
}

//kiểm tra dữ liệu gửi lên khi submit form, phần submit form này giống với chức năng thêm mới
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
//  die;
  //bắt điều kiện validate cho trường hợp name để trống
  if (empty($name)) {
    $errors = 'Name không đươc dể trống';
    //set lại name của employee là chuỗi rỗng
    $employee['name'] = '';
  } else {
    //gán giá trị cho các biến tương ứng
    //lưu ý nên sử dụng hàm mysqli_real_escape_string() với các string để convert các ký tự đặc biệt thành các ký tự an toán,
    // giúp tránh lỗi SQL Injection - là lỗi mà hacker tấn công vào CSDL của bạn
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    //thực hiện truy vấn thêm vào CSDL, sử dụng cú pháp {tên-biến} để tránh việc phải nối chuỗi
    //lưu ý dữ liệu thêm cần đúng kiểu dữ liệu của trường trong CSDL
    //với câu lệnh update và delete luôn luôn cần phải nhớ điều kiện WHERE, để tránh update hoặc delete toàn bộ dữ liệu trong bảng
    $queryUpdate = "
    UPDATE " . TABLE_EMPLOYEE . " 
    SET `name` = '{$name}', `description` = '{$description}', `salary` = {$salary}, `gender` = {$gender}, `birthday` = '{$birthday}'
    WHERE id = $id
    ";
    //truy vấn update trả về boolean - true nếu update thành công, ngược lại là false
    $isUpdate = mysqli_query($connection, $queryUpdate);
    //nếu insert thành công thì chuyển hướng user về trang index.php
    //đồng thời tạo session chứa message báo thành công
    if ($isUpdate) {
      header("Location: index.php");
      $_SESSION['success'] = "Sửa nhân viên với id = $id thành công!";
    } else {
      $errors = "Có lỗi nào đó xảy ra, không thể update dữ liệu!";
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
        Update Record <?php echo $id; ?>
    </h2>
  <?php if (empty($employee)): ?>
      <h5>Không tìm thấy employee tương ứng với id = <?php echo $id; ?></h5>
  <?php else: ?>
    <?php if (!empty($errors)): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $errors; ?>
          </div>
    <?php endif; ?>
      <form method="post" action="">
          <div class="form-group">
              <label>Name <span class="red">*</span></label>
              <input type="text" name="name" value="<?php echo $employee['name'] ?>" class="form-control">
          </div>
          <div class="form-group">
              <label>Desription</label>
              <textarea name="description" class="form-control"
                        rows="5"><?php echo $employee['description'] ?></textarea>
          </div>
          <div class="form-group">
              <label>Salary</label>
              <input type="number" name="salary" class="form-control" value="<?php echo $employee['salary'] ?>">
          </div>
          <div class="form-group">
            <?php
            //đối với radion gender cần check xem giá trị đang lưu trong CSDL là gì để set trạng  thái checked cho đúng
            $checkedMale = $employee['gender'] == 0 ? 'checked=TRUE' : '';
            $checkedFemale = $employee['gender'] == 1 ? 'checked=TRUE' : '';
            ?>
              <label>Gender</label><br/>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" <?php echo $checkedMale; ?> value="0">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="1" <?php echo $checkedFemale; ?>
                  <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
          </div>
          <div class="form-group">
              <label>Birthday</label>
              <input type="date" name="birthday" class="form-control" value="<?php echo $employee['birthday']; ?>">
          </div>
          <div class="form-group">
              <input type="submit" value="Save" name="submit" class="btn btn-primary"/>
              <a href="index.php" class="btn btn-light">Cancel</a>
          </div>
      </form>
  <?php endif; ?>
</div>
</body>
</html>
