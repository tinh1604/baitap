<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 5</title>
</head>
<body style="font-weight: bold; line-height: 2">
<?php
$n=10;
echo "n = $n <br/>";
echo 'S(n) = 1 ';
$j = 0;
for ($i = 2; $i <= $n; $i++){
    echo " + 1/$i";
    $j += 1/$i;
}
echo ' = '.(1 + $j);
?>
</body>
</html>