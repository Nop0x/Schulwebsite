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
        $(document).ready(function(){
            loop();
        });
        function loop() {
            setTimeout(function () {
                if (window.XMLHttpRequest)
                {
                    // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {
                    // AJAX mit IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("classplan").innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","get_classes.php",true);
                xmlhttp.send();
                loop();
            },5000)
        }
    </script>
</head>
<nav class="navbar navbar-default">
    <?php
    require "../php/nav.php";
    get_nav("classes");
    ?>
</nav>
<div class="container-fluid" id="classplan">
</div>
