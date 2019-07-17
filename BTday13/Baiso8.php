<?php
//8.	Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
//VD: mảng 1 có các phần tử  [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
//•	Áp dụng với 1 số mảng sau:

$arr1 = ['1', 'b', 'c', 'd'];
$arr2 = ['a', 0, null, false];

function myfunction($arr){
    $new_arr = [];
    foreach ($arr as $key => $value){
       $new_arr[$key]=  strtoupper($arr[$key]);
    }
return $new_arr;
}
echo'mảng ban đầu <br/>';
echo'<pre>';
print_r($arr1);
echo'mảng sau khi chuyển đổi <br/>';
echo'<pre>';
print_r(myfunction($arr1));
echo'<br/>';
echo'mảng ban đầu <br/>';
echo'<pre>';
print_r($arr2);
echo'mảng sau khi chuyển đổi <br/>';
echo'<pre>';
print_r(myfunction($arr2));

?>