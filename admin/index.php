<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schulwebseite - Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Schule</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost">Neuigkeiten <span class="sr-only">(current)</span></a></li>
            </ul>
            <?php
            if (isset($_COOKIE["username"]))
                echo "
                  <ul class=\"nav navbar-nav navbar-right\">
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" 
                        aria-expanded=\"false\">Welcome " . $_COOKIE["username"] . "<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                        <li><a href=\"/admin\">Mein Account</a></li>
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
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">


        <!-- Linke Spalte -->
        <div class="col-md-6">
            <!-- Form Name -->
            <legend>Ihre Benutzerdaten</legend>


            <div class="row">
                <?php
                $cookie = $_COOKIE["username"];
                echo $cookie;
                require "../php/get_user.php";
                require "../php/db.php";
                get_users(connect(), $cookie);
                ?>
            </div>
        </div>

        <script type="text/javascript">
            var changed = false;
            var user = document.getElementById('benutzername');
            user.onchange = function () {
                var response = document.getElementById('response');
                response.setAttribute("class", "alert alert-warning")
                response.setAttribute("role", "role")
                response.setAttribute("style", "visibility:block")
                document.getElementById("response").innerHTML = "Sie haben Ihren Benutzernamen geändert! Um diese Änderung" +
                    " aktiv zu machen, klicken Sie bitte auf Profil aktualisieren!";
                changed = true;
            }

            var newUsername = document.getElementById("username");
            var currentUsername = '<?php echo $cookie;?>';

            if (currentUsername != newUsername) {

            }



        </script>


        <!-- Rechte Spalte -->
        <div class="col-md-6">
            <h3>Test</h3>
        </div>


    </div>

</div>

</body>

