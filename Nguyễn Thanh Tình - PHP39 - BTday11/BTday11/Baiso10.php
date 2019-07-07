<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 10</title>
</head>
<body >
<table align="center"; cellpadding="15px "; cellspacing="1px"; border=" 1px" style="text-align: center; margin-top: 50px">
    <tr style=" font-family: Arial;  font-weight: bold; line-height: 1.5; background: #cdffff; color: red " >
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
    </tr>
    <tr>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
               echo '1x'.$i.' = '.$i.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 2*$i;
                echo '2x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 3*$i;
                echo '3x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 4*$i;
                echo '4x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 5*$i;
                echo '5x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
    </tr>
    <tr style=" font-family: Arial;  font-weight: bold; line-height: 1.5; background: #cdffff; color: red " >
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
    </tr>
    <tr>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 6*$i;
                echo '6x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 7*$i;
                echo '7x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 8*$i;
                echo '8x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 9*$i;
                echo '9x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
        <td>
            <?php
            for ($i=1; $i<=9; $i++){
                $a = 10*$i;
                echo '10x'.$i.' = '.$a.'<br/>';
            }
            ?>
        </td>
    </tr>
</table>



</body>
</html>