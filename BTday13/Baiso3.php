<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 3</title>
    <style>

        td {
            height = 20px;
            width = 20px;
            padding: 5px 20px;
            font-family: "Times New Roman";
            font-size: 15px;
        }
    </style>
</head>
<body>
<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo '<pre>';
print_r($arrs);
?>
<table align="center" cellspacing="0"  border=" 1px">
    <tr> <td style='font-weight: bold'><?php echo "Tên khóa học" ?> </td> </tr>
    <tr> <td ><?php echo $arrs[0]; ?> </td> </tr>
    <tr> <td ><?php echo $arrs[1]; ?> </td> </tr>
    <tr> <td ><?php echo $arrs[2]; ?> </td> </tr>
    <tr> <td ><?php echo $arrs[3]; ?> </td> </tr>
</table>
</body>
</html>

