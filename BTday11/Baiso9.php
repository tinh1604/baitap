<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 9</title>
</head>
<body >
<div style="font-weight: bold; line-height: 1.5; display: block; margin: 50px 600px">
<?php
//cách 1
    $a = ['*','**','***','****','*****','*****','****','***','**','*'];
    foreach( $a as $value ){
    echo "$value <br/>";
}

//cách 2
//$a = ["*","**","***","****","*****"];
//$b = ["*****","****","***","**","*"];
//foreach( $a as $value ){
//    echo "$value <br/>";
//}
//foreach( $b as $value ){
//    echo "$value <br/>";
//}

?>
</div>
</body>
</html>