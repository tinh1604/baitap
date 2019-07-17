<?php
require_once 'views/layouts/header.php';
?>
<div class="container" id="main-content">
    <a href="index.php?controller=book&action=create" class="btn-create btn btn-primary">Thêm dữ liệu</a>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
        <?php if (!empty($books)): ?>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id'] ?></td>
                    <td><?php echo $book['name'] ?></td>
                    <td><?php echo date('d-m-Y H:i:s', strtotime($book['created_at'])) ?></td>
                    <td>
                        <?php
                        $urlDetail = "index.php?controller=book&action=detail&id={$book['id']}";
                        $urlUpdate = "index.php?controller=book&action=update&id={$book['id']}";
                        $urlDelete = "index.php?controller=book&action=delete&id={$book['id']}";
                        ?>
                        <a href="<?php echo $urlDetail; ?>" title="Chi tiết bản ghi">
                            <span class='glyphicon glyphicon-eye-open'></span>
                        </a>&nbsp;
                        <a href="<?php echo $urlUpdate; ?>" title="Sửa bản ghi">
                            <span class='glyphicon glyphicon-pencil'></span>
                        </a>&nbsp;
                        <a href="<?php echo $urlDelete; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')"
                           title="Xóa bản ghi">
                            <span class='glyphicon glyphicon-trash'></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Không có bản ghi nào</td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<?php
require_once 'views/layouts/footer.php';
?>
