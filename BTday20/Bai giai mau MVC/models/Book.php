<?php
require_once 'models/Model.php';

class Book extends Model
{
    public $connection;
    public function getAll()
    {
        $connection = $this->openConnection();
        $querySelect = "SELECT * FROM books ORDER BY created_at DESC";
        $results = mysqli_query($connection, $querySelect);
        $books = [];
        if (mysqli_num_rows($results) > 0) {
            $books = mysqli_fetch_all($results,
                MYSQLI_ASSOC);
        }
        $this->closeConnection($connection);
        return $books;
    }

    public function getBookById($id)
    {
        $connection = $this->openConnection();
        $querySelect = "SELECT * FROM books WHERE id=$id LIMIT 1";
        $results = mysqli_query($connection, $querySelect);
        $book = [];
        if (mysqli_num_rows($results) > 0) {
            $book = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $book = $book[0];
        }
        mysqli_close($connection);
        return $book;
    }

    public function updateBook($book)
    {
        $connection = $this->openConnection();
        $queryUpdate = "UPDATE books SET name = '{$book['name']}' WHERE id = {$book['id']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        mysqli_close($connection);
        if ($isUpdate) {
            return TRUE;
        }
        return FALSE;
    }


    public function insertBook($book)
    {
        $connection = $this->openConnection();
        $queryInsert = "INSERT INTO books(`name`) VALUES ('{$book['name']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        mysqli_close($connection);
        if ($isInsert) {
            return TRUE;
        }
        return FALSE;
    }

  public function deleteBook($id)
    {
        $connection = $this->openConnection();
        $queryDelete = "DELETE FROM books WHERE id = $id";
        $isDelete = mysqli_query($connection, $queryDelete);
        mysqli_close($connection);
        if ($isDelete) {
            return TRUE;
        }
        return FALSE;
    }

}