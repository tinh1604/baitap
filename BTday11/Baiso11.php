<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 10</title>
</head>
<body >
<table align="center"; cellpadding="15px "; cellspacing="1px"; border=" 1px" style="text-align: center; margin-top: 50px">
    <?php
    for($row=1; $row <= 8; $row++)
    {
        echo "<tr>";
        for($col = 1; $col <= 8; $col++)
        {
            $sum = $row + $col;
            if($sum % 2 == 0)
            {
                echo "<td height=20px width=20px bgcolor=black></td>";
            }
            else
            {
                echo "<td height=20px width=20px bgcolor=white></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>



</body>
</html>