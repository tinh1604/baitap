<?php require_once 'views/layouts/header.php'; ?>
    <div class="container" id="main-content">
        <h2>Thêm dữ liệu</h2>
        <form method="POST" action="index.php?controller=book&action=create">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value=""/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
            <a href="index.php" class="btn btn-default">Hủy</a>
        </form>
    </div>
<?php require_once 'views/layouts/footer.php'; ?>