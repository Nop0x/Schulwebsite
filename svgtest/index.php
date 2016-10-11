<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schulwebseite</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <?php
    require "../php/nav.php";
    get_nav("news")
    ?>
</nav>
<div class="container-fluid">
    <svg style="height: 35px; width: 32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 62">
        <path fill="#1A374D"
              d="M42 27v-20c0-3.7-3.3-7-7-7s-7 3.3-7 7v21l12 15-7
              15.7c14.5 13.9 35 2.8 35-13.7 0-13.3-13.4-21.8-26-18zm6 25c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7z"/>
        <path
            d="M14 27v-20c0-3.7-3.3-7-7-7s-7 3.3-7 7v41c0 8.2 9.2 17 20 17s20-9.2 20-20c0-13.3-13.4-21.8-26-18zm6
            25c-3.9 0-7-3.1-7-7s3.1-7 7-7 7 3.1 7 7-3.1 7-7 7z"/>
    </svg>
</div>
</body>
