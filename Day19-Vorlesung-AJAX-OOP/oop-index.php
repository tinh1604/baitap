<?php
//Khai báo class
//class Student {
////    khai báo các thuộc tính
//    public $name = ' Mel';
//    public $age;
//    private $gender;
//    protected $created_at;
//
////    khai báo các phương thức
//    public function  displayName() {
//        echo "Hello, World";
//    }
//}
//
//$student1 = new Student();
//$student1->displayName();
//$studentName = $student1->name;
//echo $studentName;

//Từ khóa this
//class Student {
//    private $birthday;
//
//    public function setBirthday($birthday) {
//        $this->birthday = $birthday;
//    }
//
//    public function getBirthday() {
//        return $this->birthday;
//    }
//}
//
//$student = new Student();
//$student->setBirthday("12-2-2012");
//echo $student->getBirthday();

//Phạm vi truy cập
//class Person {
//    public $public;
//    private $private;
//    protected $protected;
//
//    public function getPrivate(){
//        $this->private;
//    }
//}
//
//class Student extends Person{
//    public function getProtected(){
//        $protected = $this->protected;
//    }
//}
//$person = new Student();
//$student = new Student();
//echo "<p>$student->public</p>";
//echo "<p>$student->private</p>";
//echo "<p>$student->protected</p>";

//Hàm khởi tạo
class Student {
    public function __construct()
    {
        echo "Đây là hàm khởi tao";
    }
}

$student = new Student();