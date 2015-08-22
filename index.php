!DOCTYPE html>
<html lang="fr">
<head>
    <title>Site de démo pour le cours Git d'OC</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="style.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
          <p>ce bouton permet de réaliser un non-appel ajax à l'horloge parlante : <button id="btn">Au troisième top...</button></p>
        <div id="heure"><p>nous sommes le <?=date("d/m/Y")?> au moment du chargement de la page il était <?=date("h\hi")?></p></div>
    </div>
</body>
</html>
