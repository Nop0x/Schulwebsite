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
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Schule</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Neuigkeiten <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Login</a></li>
            </ul>
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
        header("Content-Type: text/html;charset=UTF-8");
        require "php/db.php";
        $sql = "SELECT id, header, content, timestamp FROM news";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class=\"col-sm-6 col-md-4\">";
                echo "<div class=\"thumbnail\">";
                echo "<div class=\"caption\">";
                echo "<h3>" . $row["header"] . "</h3>";
                echo "<p>" . $row["content"] . "</p>";
                echo "<p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Read more</a>";
                echo "<hr>";
                echo "<p> News vom ". date('d.m.Y',strtotime($row["timestamp"]));
                echo "</div></div></div>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>