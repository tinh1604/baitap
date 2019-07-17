<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>
    <style>
        #red {
            color: red;
        }
        #blue {
            color: blue;
        }
        #orange{
            color: orange;
        }
        #white{
            color: white;
        }
        body{
            background: wheat;
        }
        p{
            font-family: "Times New Roman";
            font-size: 15px;
            font-weight: bold;
        }
    </style>

</head>
<body>
<?php

$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
echo'<pre>';
print_r($arrs);
echo '<p>Đây là mảng số nguyên</p>';
echo "<p>Màu <span id='red' >$arrs[0]</span> là màu yêu thích của Anh, <span id='blue' >$arrs[1]</span> là màu yêu thích của Sơn, <span id='orange' >$arrs[2]</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <span id='white'>$arrs[3]</span></p>";
?>
</body>
</html>
