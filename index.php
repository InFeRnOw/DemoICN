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
        <div id="loginBox">
            <div class="iCenter">
                <h1 class="titre">Demo I.C.N.</h1>
                <form action="INCLUDES/login-inc.php" method="POST">
                <input class="username" type="text" name="uid" placeholder="Nom d'utilisateur">
                <input class="password" type="password" name="pass"  placeholder="Mot de passe"><br>
                    <button class="submitBtn btn btn-primary" type="submit" name="submit">Se connecter</button>
                </form>
            </div>
        </div>
</body>
</html>
