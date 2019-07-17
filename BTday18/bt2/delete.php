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
//với câu lệnh update và delete luôn luôn cần phải nhớ điều kiện WHERE, để tránh update hoặc delete toàn bộ dữ liệu trong bảng
$queryDelete = 'DELETE FROM ' . TABLE_EMPLOYEE . " WHERE id=$id";
//truy vấn delete trả về boolean - true nếu delete thành công, ngược lại là false
$isDelete = mysqli_query($connection, $queryDelete);
if ($isDelete) {
  $_SESSION['success'] = "Xóa employee với id = $id thành công";
} else {
  $_SESSION['error'] = 'Có lỗi xảy ra trong quá trình xóa user';
}
header("Location: index.php");
//đóng kết nối
mysqli_close($connection);
?>

