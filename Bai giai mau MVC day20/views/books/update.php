<?php require_once 'views/layouts/header.php'; ?>
    <div class="container" id="main-content">
        <h2>Cập nhật bản ghi #<?php echo $book['id'] ?></h2>
        <form method="POST" action="index.php?controller=book&action=update&id=<?php echo $book['id']?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $book['name'] ?>"/>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
            <a href="index.php" class="btn btn-default">Hủy</a>
        </form>
    </div>
<?php require_once 'views/layouts/footer.php'; ?>