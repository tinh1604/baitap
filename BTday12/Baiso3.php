<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 3</title>
</head>
<body >
<table align="center"; cellpadding="15px "; cellspacing="1px"; border=" 1px" style="text-align: center; margin-top: 50px">
    <?php
    function ktNguyenTo($snt){
        $check = true;
        if($snt<=1){
            $check = false;
        }
        else {
            for ($x = 2; $x <= sqrt($snt); $x++){
                if ($snt % $x == 0) {
                    $check = false;
                    break;
                }
            }
                }
        return $check;
    }
    $n = 1;
    for($i=1; $i <= 10; $i++)
    {
        echo "<tr>";
        for($j= $n; $j <= ($n+9); $j++)
        {
            if (ktNguyenTo($j)){
                echo "<td height=20px width=20px bgcolor=green>$j</td>";

            } else {
                echo "<td height=20px width=20px bgcolor=white>$j</td>";

            }

        }
        $n = $j;
        echo "</tr>";
    }
    ?>
</table>



</body>
</html>