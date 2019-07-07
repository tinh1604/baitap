<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'ajax_example';
const DB_PORT = 3306;

//B1 - Khởi tạo kết nối
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
mysqli_set_charset($connection, 'UTF8');
if (!$connection) {
    die('Không thể kết nối. Lỗi: ' . mysqli_connect_error());
}
//B2 - Thực hiện truy vấn: Lấy ra tất cả dữ liệu
$querySelect = "SELECT * FROM books";
$result = mysqli_query($connection, $querySelect);
$books = [];
if (mysqli_num_rows($result) > 0) {
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
//B3 - Đóng kết nối
mysqli_close($connection);
?>

<table cellspacing="0" cellpadding="5px" border="1px solid black" style="text-align: center">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Description</td>
        <td>Type</td>
        <td>Published Date</td>
        <td>Created At</td>
    </tr>
    <?php if (empty($books)): ?>
        <tr>
            <td colspan="6">Không có bản ghi nào</td>
        </tr>
    <?php else: ?>
        <?php foreach ($books as $book): ?>
        <tr>
            <td>
                <?php echo $book['id']; ?>
            </td>
            <td>
                <?php echo $book['name']; ?>
            </td>
            <td>
                <?php echo $book['description']; ?>
            </td>
            <td>
                <?php
                $typeName = '';
                switch ($book['type']) {
                    case 0: $typeName = 'Văn học'; break;
                    case 1: $typeName = 'Toán'; break;
                }
                echo $typeName;
                ?>
            </td>
            <td>
                <?php echo $book['published_date']; ?>
            </td>
            <td>
                <?php echo $book['created_at']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>
