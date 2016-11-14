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

//Login
<nav class="navbar navbar-default">
    <?php
    require "../php/nav.php";
    get_nav("login");
    ?>
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

        //Benutzerdatenspalte
        <div class="col-md-6">
            <!-- Form Name -->
            <legend>Ihre Benutzerdaten</legend>


            <div class="row">
                <?php
                /*
                 * Zeigt die Benutzerverwaltung an.
                 */
                $cookie = $_COOKIE["username"];
                require "../php/get_user.php";
                require "../php/db.php";
                ?>
                <div class="container-fluid">
                    <form class="form-horizontal" action="index.php" method="post">
                //Benutzernamen-Änderung
                <?php
                $return = get_users(connect(), $cookie, $_POST);
                if($return == "userupdate")
                {
                    ?>
                    //Response bei endgültiger Nutzernamen-Änderung
                    <script>
                        var response = document.getElementById('response');
                        response.setAttribute("class", "alert alert-warning")
                        response.setAttribute("role", "role")
                        response.setAttribute("style", "visibility:block")
                        document.getElementById("response").innerHTML = "Benutzername geändert!";
                    </script>
                    <?php
                }
                ?>
            </div>
        </div>
        //Response auf Antrag der Änderung des Benutzernamens
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
        </script>


    </div>

</div>

</body>

