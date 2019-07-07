<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bài số 5</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>
<body>
<?php
$name = "Nguyễn Thanh Tình";
$email = "tinh1604@gmail.com";
$phone = "0916840699";
?>
<form style="margin-top: 2%">
    <div class="container" style="width: 50%">
    <div class="row">
        <div class="col">
            Name*
            <input id="nameinput" type="text" class="form-control" placeholder="Your name" value="<?php echo($name) ?>">
        </div>
        <div class="col">
            Email*
            <input id="emailinput" type="email" class="form-control" placeholder="Your email" value="<?php echo($email) ?>">
        </div>
        <div class="col">
            Phone*
            <input id="phoneinput" type="number" class="form-control" placeholder="Phone number" value="<?php echo($phone) ?>">
        </div>
    </div> <br/>
        Message*
        <textarea id="messinput" rows="3" cols="87%" placeholder="This is a messager" value=""></textarea> <br/>
        <button type="button" class="btn btn-warning" onclick="return myfunction()">Send Message</button> <br/>
        These fields are required
    </div> <br/> <br/>
</form>
<p id="show" style="margin-left: 26%"></p>
<script type="text/javascript">
    function myfunction() {
        var nameip = document.getElementById("nameinput").value;
        var emailip = document.getElementById("emailinput").value;
        var phoneip = document.getElementById("phoneinput").value;
        var messip = document.getElementById("messinput").value;
        document.getElementById('show').innerHTML = "Name: " +nameip +"<br/>"
            +"Email: "+emailip +"<br/>" +"Phone: "+phoneip +"<br/>" +"Message: " +messip;
            return false;
    }
</script>
</body>
</html>