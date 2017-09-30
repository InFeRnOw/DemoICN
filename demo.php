<?php
    session_start();
    include 'INCLUDES/dbh-inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>Demo I.C.N</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="CSS/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>
    </head>
<body>
    <div id="demoBox">
        <?php
            if(isset($_SESSION['u_id'])) {
                echo '<div class="userPseudo">
                    <em><h1 style="color: white; font-size: 50px;">Bienvenue<br>[' .$_SESSION['u_uid']. ']</h1></em>
                    </div>';
            }
        ?>
        <h2 style="text-decoration: underline; margin-top: 15%;">Languages utilisés<h2>
        <ol class="listeLang">
            <li class="lHtml"><a href="#"> HTML</a></li>
            <ul>
                <li class="sousClassAvec1" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Avec</a></li>
                <li class="sousClassSans1" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Sans</a></li>
            </ul>
            <li><a href="#"> CSS</a></li>
            <ul>
                <li class="sousClassAvec2" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Avec</a></li>
                <li class="sousClassSans2" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Sans</a></li>
            </ul>
            <li><a href="#"> JAVASCRIPT<br>(avec Jquery)</a></li>
            <ul>
                <li class="sousClassAvec3" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Avec</a></li>
                <li class="sousClassSans3" style="margin-top:1% !important"><a href="#" style="font-size:16px;"> Sans</a></li>
            </ul>
            <li><a href="#"> PHP<br>(avec MySQL)</a></li>
            <ul>
                <li class="sousClassAvec4" style="margin-top:1% !important"><a href="index.php" style="font-size:16px;"> Avec</a></li>
                <li class="sousClassSans4" style="margin-top:1% !important"><a href="indexSansPhp.php" style="font-size:16px;"> Sans</a></li>
            </ul>
        </ol>
    </div>
    <div id="contenuDemo">
        <div class="htmlCont">
            <h2 style="text-decoration: underline;">Historique</h2>
            <code>
                &ltp>Code HTML à la fin&lt/p>
            </code>
            <img class="imgAvec" src="CSS/IMGS/indexHtmlAvecResized.jpg" alt="..."/>
        </div>
    </div>
</body>
</html>
