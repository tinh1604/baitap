<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài 2</title>

</head>
<body>
<!--sử dụng html-->
<p>
    Today I \'ll learn PHP - "Variable"
</p>
<p id="show"></p>
<!--sử dụng javascrip-->
<script type="text/javascript">
    document.getElementById("show").innerHTML = "Today I \\'ll learn PHP - \"Variable\"";
    // document.write("2.1.Today I \\'ll learn PHP - \"Variable\"");

</script>
<!--sử dụng php-->
<?php
echo 'Today I \'ll learn PHP - "Variable"';
//?>

</body>




</html>