<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 04.10.2016
 * Time: 14:55
 */
?>
<head>
    <meta charset="UTF-8">
    <title>Schulwebseite</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript">
        function updatetimes() {
            $.ajax({
                url:"get_classes.php",
                type:"GET",
                success:function (data) {
                    console.log(data);
                    var response = $.parseJSON(data);
                    for (var i = 0; i<response.length; i++)
                    {
                        document.getElementById('classplan').innerHTML +=
                            "<tr>" +
                            "   <td>" + response[i].fach + "</td>" +
                            "   <td>" + response[i].lehrer + "</td>" +
                            "   <td>" + response[i].raum + "</td>" +
                            "   <td>" + response[i].delay + "</td>";
                    }
                }
            })
        }
        updatetimes();
        setInterval(updatetimes, 5000);
    </script>
</head>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Schule</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="/">Neuigkeiten <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="/classes/classesoverview.php">Stundenplan<span class="sr-only">(current)</span></a></li>
            </ul>
            <?php
            if (isset($_COOKIE["username"]))
                echo "
                  <ul class=\"nav navbar-nav navbar-right\">
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" 
                        aria-expanded=\"false\">Welcome " . $_COOKIE["username"] . "<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                        <li><a href=\"/admin\">Admin</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"/logout\">Logout</a></li>
                        </ul>
                        </li>
                  </ul>";
            else
                echo "<ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"/login\">Login</a></li>
                      </ul>";
            ?>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Kurs</th>
            <th>Lehrer</th>
            <th>Raum</th>
            <th>Verspätung</th>
        </tr>
        </thead>
        <?php
        require "get_classes.php";
        getclasses();
        ?>
        <tbody id="classplan">
        </tbody>
    </table>
</div>
