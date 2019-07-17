<?php
//khởi tạo session, dòng này nên đặt ở vị trí đầu tiên của 1 file, trước các lệnh echo
session_start();
//khai báo các hằng cấu hình cho việc connect vào database
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'bt2_day18';
const DB_PORT = 3306;
const TABLE_EMPLOYEE = 'employees';

$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$connection) {
  die("Không thể kết nối tới CSDL " . DB_NAME . ". Lỗi: " . mysqli_connect_error());
}

//set utf8 bằng query để tránh trường hợp hiển thị lỗi khi lấy dữ liệu có dấu từ bảng
mysqli_query($connection, 'SET NAMES "utf8"');