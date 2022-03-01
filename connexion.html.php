<!DOCTYPE html>
<html>
    <!-- <head>
        <meta charset="UTF-8">
        <title>connexion</title>
        <link rel="stylesheet" href="<?= ROOT."style.css";?>">
    </head>
    <body>
        <div class="container">
            <div>
                <h1>Le plaisir de jouer</h1>
            </div>
            <div class="connexion">
                <h1>Login Form</h1>
                    <input type="" id="" placeholder="Login">
                    <input type="" id="" placeholder="Password">
                    <input type="submit" value="Connexion">
            </div>
        </div>
        
    </body> -->
    
<head>
<title>QUIZZ APP</title>
<link rel="stylesheet" type="text/css" href="<?=WEBROOT."css/login.css"?>">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
rel="stylesheet">
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form action="<?=PATH_POST?>" method="post">
<input type="hidden"
name="controller" value="securite">
<input type="hidden"
name="action" value="connexion" >
<script type="text/javascript" src="<?=WEBROOT."js/login.js"?>"></script>
</body>
</html>










