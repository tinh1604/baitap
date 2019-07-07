<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 6</title>
</head>
<body style="font-weight: bold; line-height: 2">
<?php
$n = 10;
$x = 2;
$y = 0;
$m = 2*$n;
echo "n = $n"; echo '<br/>';
echo "x = $x";echo '<br/>';
echo 'S(n) = x*2 + x*4 + ⋯ + x*2n =  ';

for ($i = 1; $i <$n; $i++){
    $a = 2*$i;
    echo $x.'*'.$a.' + ';
    $y += $x*$a;
}
echo $x.'*'.$m;
$y1 = $y + $x*2*$n;
echo " = $y1";
?>
</body>
</html>