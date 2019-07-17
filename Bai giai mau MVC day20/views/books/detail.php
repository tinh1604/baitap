<?php require_once 'views/layouts/header.php'; ?>
<div id="main-content" class="container">
    <?php if (!empty($book)): ?>
        <h3>Thông tin chi tiết <b>#<?php echo $book['id']; ?></b></h3>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Ngày tạo</th>
            </tr>
            <tr>
                <td><?php echo $book['id']; ?></td>
                <td><?php echo $book['name']; ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($book['created_at'])); ?></td>
            </tr>
        </table>
    <?php else: ?>
        <h3>Không tìm thấy thông tin bản ghi</h3>
    <?php endif; ?>
    <a href="index.php" class="btn btn-primary">Quay lại</a>
</div>
<?php require_once 'views/layouts/footer.php'; ?>
