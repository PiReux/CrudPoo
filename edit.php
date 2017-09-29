<?php
require 'Database.php';
require 'Article.php';
use wild\Database;
use wild\Article;

$db = new Database('blog');
$res = $db->exec("article", $_POST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport"
          content="width = device - width, user - scalable = no, initial - scale = 1.0, maximum - scale = 1.0, minimum - scale = 1.0">
    <meta http-equiv="X - UA - Compatible" content="ie = edge">
    <title>Document</title>

</head>
<body>
<div class="container">
    <form method="post" role="form">
        <legend>Rajouter un blog</legend>
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Ex: Mon petit déjeuner"
                   value="">


        </div>
        <div class="form-group">
            <label for="text">Texte</label>
            <input type="text" class="form-control" name="text" id="text" placeholder="Ecrivez votre contenu ici"
                   value="">

        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" placeholder="Ex: Jean-René"
                   value="">

        </div>

        <button type="submit" class="btn btn-success">Soumettre l'article</button>
    </form>
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</div>
<p>Vous pouvez consulter tous les articles <a href="articles.php">ici</a></p>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>