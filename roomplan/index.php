<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schulwebseite - Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script type="application/javascript">
        //Raumplan zeichnen
        function draw() {
            var canvas = document.getElementById("canvas");
            if (!canvas.getContext) {
            } else {
                var ctx = canvas.getContext("2d");
                ctx.font= "16px Arial";
                ctx.strokeRect(200, 0, 150, 150);
                ctx.beginPath();
                ctx.moveTo(0, 0);
                ctx.lineTo(200, 0);
                ctx.moveTo(200, 100);
                ctx.lineTo(150, 100);
                ctx.moveTo(150, 100);
                ctx.lineTo(150, 150);
                ctx.strokeRect(0, 150, 150, 150);
                ctx.moveTo(0, 0);
                ctx.lineTo(0, 150);
                ctx.strokeRect(150, 200, 200, 150);
                ctx.moveTo(450, 150);
                ctx.lineTo(600, 150);
                ctx.moveTo(500, 150);
                ctx.lineTo(500, 0);
                ctx.moveTo(500, 0);
                ctx.lineTo(700, 0);
                ctx.moveTo(700, 0);
                ctx.lineTo(700, 200);
                ctx.moveTo(600, 150);
                ctx.lineTo(600, 200);
                ctx.strokeRect(600, 200, 150, 150);
                ctx.strokeRect(600, 350, 150, 150);
                ctx.strokeRect(350, 400, 250, 150);
                ctx.strokeRect(350, 250, 200, 150);
                ctx.strokeRect(350, 200, 100, 50);
                ctx.strokeRect(450, 200, 100, 50);
                var k = 0;
                var j = 450;
                for (var i = 0; i <= 10; i++) {
                    ctx.strokeRect(j, k, 50, 50);
                    k+=10;
                }
                ctx.strokeText("WC Herren",370,225,100);
                ctx.strokeText("WC Damen",470,225,100);

                ctx.stroke();
            }
        }
    </script>
</head>
<body onload="draw();">
<nav class="navbar navbar-default">
    //Anzeige der Navigation
    <?php
    require "../php/nav.php";
    get_nav("room")
    ?>
</nav>
<div class="container-fluid">
   <canvas id="canvas" width="1000" height="1000"></canvas>
</div>
</body>
