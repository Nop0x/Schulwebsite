<?php

function get_nav($toggle)
{
    echo ("<div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\"
                    data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Schule</a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
            ");
            if($toggle == "news")
                echo "<li class=\"active\"><a href=\"/\">Neuigkeiten <span class=\"sr-only\">(current)</span></a></li>
                <li class=\"\"><a href=\"/classes/classesoverview.php\">Stundenplan<span class=\"sr-only\">(current)</span></a></li>";
            if($toggle == "classes")
                echo "<li class=\"\"><a href=\"/\">Neuigkeiten <span class=\"sr-only\">(current)</span></a></li>
                <li class=\"active\"><a href=\"/classes/classesoverview.php\">Stundenplan<span class=\"sr-only\">(current)</span></a></li>";
            echo "</ul>";
            if (isset($_COOKIE["username"])) {
                echo "
                  <ul class=\"nav navbar - nav navbar - right\">
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                        aria - expanded = \"false\" > Welcome " . $_COOKIE["username"] . "<span class=\"caret\"></span></a>
                        <ul class=\"dropdown - menu\">
                        <li><a href=\" / admin\">Admin</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\" /logout\">Logout</a></li>
                        </ul>
                        </li>
                  </ul>";
            }
            else {
                echo "<ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"/login\">Login</a></li>
                      </ul>";
            }
    echo "
        </div>
    </div>";
}