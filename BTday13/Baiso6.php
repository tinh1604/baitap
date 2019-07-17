<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
//Hãy tạo mảng thứ 3 từ 2 mảng trên, mảng kết quả là mảng sau:
//$keysAndValues = array(
//    "first"=>"dinosaur",
//    "second"=>"pig",
//    "third"=>"platypus"
//);
$keysAndValues = array(
    $keys["field1"] => $values["field1value"],
    $keys["field2"] => $values["field2value"],
    $keys["field3"] => $values["field3value"]
);
echo'<pre>';
print_r($keysAndValues);
?>