<?php
require_once 'controllers/Controller.php';
require_once 'models/Book.php';

class BookController extends Controller
{
    public function show()
    {
        $book = new Book();
        $books = $book->getAll();
        require_once 'views/books/show.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Tham số không hợp lệ';
            header("Location: index.php");
        }
        $bookModel = new Book();
        $book = $bookModel->getBookById($_GET['id']);

        require_once 'views/books/detail.php';
    }


    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Tham số không hợp lệ';
            header("Location: index.php");
            exit();
        }
        $id = $_GET['id'];
        $bookModel = new Book();
        $book = $bookModel->getBookById($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $book = [
                'id' => $id,
                'name' => $name
            ];
            $isUpdate = $bookModel->updateBook($book);
            if ($isUpdate) {
                $_SESSION['success'] = "Cập nhật bản ghi #$id thành công";
            } else {
                $_SESSION['error'] = "Cập nhật bản ghi #$id thất bại";
            }
            header("Location: index.php");
            exit();
        }
        require_once 'views/books/update.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $book = [
                'name' => $name
            ];
            $bookModel = new Book();
            $isInsert = $bookModel->insertBook($book);
            if ($isInsert) {
                $_SESSION['success'] = "Thêm bản ghi thành công";
            } else {
                $_SESSION['error'] = "Thêm bản ghi thất bại";
            }
            header("Location: index.php");
            exit();
        }
        require_once 'views/books/create.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'Tham số không hợp lệ';
            header("Location: index.php");
            exit();
        }
        $bookModel = new Book();
        $id = $_GET['id'];
        $isDelete = $bookModel->deleteBook($id);
        if ($isDelete) {
            $_SESSION['success'] = "Xóa bản ghi #$id thành công";
        } else {
            $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
        }
        header("Location: index.php");
        exit();
    }

}