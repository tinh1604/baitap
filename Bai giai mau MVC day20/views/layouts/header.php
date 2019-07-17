<!DOCTYPE html>
<html>
<head>
    <title>MVC</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script type="text/javascript"
            src="assets/js/jquery.min.js"></script>
    <script type="text/javascript"
            src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="assets/js/main.js"></script>
</head>
<body>
<div id="header" class="container">
    <h2>Đây là header</h2>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php endif; ?>
</div>

