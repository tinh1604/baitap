<?php
//MÀN HÌNH LIST
//import file cấu hình DB
require_once 'config.php';
//thực thi truy vấn select lấy toàn bộ dữ liệu trong bảng employees
$querySelect = 'SELECT * FROM ' . TABLE_EMPLOYEE;
//truy vấn select sẽ trả về 1 mảng, không phải boolean như khi insert, delete hay update
$results = mysqli_query($connection, $querySelect);
//khởi tạo mảng rỗng cho biến employees để sử dụng trong trường hợp không có bản ghi nào
$employees = [];
//nếu có bản ghi thì set biến employees bằng mảng chứa các dữ liệu lấy được từ bảng employees
if (mysqli_num_rows($results) > 0) {
  $employees = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
//đóng kết nối
mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BT2 - List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="main container">
  <?php
  //nếu có session message success thì hiển thị ở đây, sử dụng alert của bootstrap
  //sau khi hiển thị xong cần xóa luôn session này để tránh hiển thị lại
  if (isset($_SESSION['success'])) :
    ?>
      <div class="alert alert-primary" role="alert">
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
      </div>
  <?php endif; ?>
  <?php
  //nếu có session message error thì hiển thị ở đây, sử dụng alert của bootstrap
  //sau khi hiển thị xong cần xóa luôn session này để tránh hiển thị lại
  if (isset($_SESSION['error'])) :
    ?>
      <div class="alert alert-danger" role="alert">
        <?php
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
      </div>
  <?php endif; ?>
    <h2 class="heading">
        Employees List
        <a href="create.php" class="create-link btn btn-primary"><i class="fa fa-plus"></i> Add New Employees</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Created_at</th>
            <th>Action</th>
        </tr>
        <!--    nếu không có bản ghi nào thì hiển thị text thông báo-->
      <?php if (empty($employees)) : ?>
          <tr>
              <td colspan="8">Không có bản ghi nào</td>
          </tr>
          <!--  ngược lại nếu có bản ghi thì lặp mảng để hiển thị ra các trường tương ứng-->
      <?php else: ?>
        <?php foreach ($employees as $employee): ?>
              <tr>
                  <td><?php echo $employee['id'] ?></td>
                  <td><?php echo $employee['name'] ?></td>
                  <td><?php echo $employee['description'] ?></td>
                  <td>
                    <?php
                    //format dạng tiền tệ cho biến salary, phân cách hàng nghìn bởi ký tự .
                    echo number_format($employee['salary'], 0, '', '.') . ' VNĐ';
                    ?>
                  </td>
                  <td>
                    <?php
                    //xử lý khi hiển thị gender, giả sử quy định gender = 0 thì là Nam (Male), gender = 1 là Nữ (Female)
                    $genderText = '';
                    switch ($employee['gender']) {
                      case 0:
                        $genderText = 'Male';
                        break;
                      case 1:
                        $genderText = 'Female';
                        break;
                    }
                    echo $genderText;
                    ?>
                  </td>
                  <td>
                    <?php
                    //hiển thị ngày sinh theo format dễ đọc
                    //trường hợp ngày sinh bị trống sẽ có giá trị mặc định là 0000-00-00 (do trường birthday cho phép null)
                    // thì cần check để tránh trường hợp hiển thị ngày mặc định là 01-01-1970
                    echo $employee['birthday'] != '0000-00-00' ? date('d-m-Y', strtotime($employee['birthday'])) : '';
                    ?>
                  </td>
                  <td>
                    <?php
                    //hiển thị ngày tạo theo format dễ đọc
                    echo date('d-m-Y H:i:s', strtotime($employee['created_at']));
                    ?>
                  </td>
                  <td>
                    <?php
                    //gắn link view, edit, delete tương ứng với id của mỗi bản ghi
                    //sử dụng cú pháp {tên-biến} thay cho việc nối chuỗi
                    $urlView = "view.php?id={$employee['id']}";
                    $urlEdit = "edit.php?id={$employee['id']}";
                    $urlDelete = "delete.php?id={$employee['id']}";
                    //chú ý với trường hợp delete, cần thêm sự kiện javascript confirm để xác nhận trước khi xóa
                    ?>
                      <a href="<?php echo $urlView ?>"><i class="fa fa-eye"></i></a> &nbsp;
                      <a href="<?php echo $urlEdit ?>"><i class="fa fa-pencil-alt"></i></a>&nbsp;
                      <a href="<?php echo $urlDelete ?>"
                         onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi có ID = <?php echo $employee['id'] ?>?')"><i
                                  class="fa fa-trash"></i></a>
                  </td>
              </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
</div>
</body>
</html>
