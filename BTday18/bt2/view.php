<?php
//MAN HÌNH VIEW
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
        View Record
    </h2>
  <?php if (empty($employee)): ?>
      <h5>Không tìm thấy employee tương ứng với id = <?php echo $id; ?></h5>
  <?php else: ?>
      <div class="form-group">
          <b>ID</b> <br/>
        <?php echo $employee['id']; ?>
      </div>
      <div class="form-group">
          <b>Name</b> <br/>
        <?php echo $employee['name']; ?>
      </div>
      <div class="form-group">
          <b>Desription</b><br/>
        <?php echo $employee['description']; ?>
      </div>
      <div class="form-group">
          <b>Salary</b><br/>
        <?php echo number_format($employee['id']); ?> VNĐ
      </div>
      <div class="form-group">
          <b>Gender</b><br/>
        <?php
        $genderName = '';
        switch ($employee['gender']) {
          case 0:
            $genderName = 'Male';
            break;
          case 0:
            $genderName = 'Female';
            break;
        }
        echo $genderName;
        ?>
      </div>
      <div class="form-group">
          <b>Birthday</b><br/>
        <?php //hiển thị ngày sinh theo format dễ đọc
        //trường hợp ngày sinh bị trống sẽ có giá trị mặc định là 0000-00-00 (do trường birthday cho phép null)
        // thì cần check để tránh trường hợp hiển thị ngày mặc định là 01-01-1970
        echo $employee['birthday'] != '0000-00-00' ? date('d-m-Y', strtotime($employee['birthday'])) : '';; ?>
      </div>
  <?php endif; ?>
    <div class="form-group">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
</div>
</body>
</html>
