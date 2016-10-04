<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schulwebseite</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
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
                <li class="active"><a href="/">Neuigkeiten <span class="sr-only">(current)</span></a></li>
                <li class=""><a href="/classes/classesoverview.php">Stundenplan<span class="sr-only">(current)</span></a></li>
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
    <div class="jumbotron">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/land1.png" alt="test2" style="width: 100%; height: 100%">
                    <div class="carousel-caption">
                        <p>das ist ein test</p>
                    </div>
                </div>
                <div class="item">
                    <img src="img/land2.png" alt="test1" style="width: 100%; height: 100%">
                    <div class="carousel-caption">
                        <p>das ist ein test</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row">
        <?php
            require "php/get_news.php";
            require "php/db.php";
            get_news(connect());
        ?>
    </div>
</div>
</body>
</html>