<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les articles</title>
</head>
<body>
<?php foreach ($aArticles as $k => $article) { //parcours un tableau
        $title = $article->getTitle();
        $author = $article->getAuthor();
        $id = $article->getId();
        print("<p>" . $title . ' ' . "<span style='font-weight:bold'>" . $author . "</span>" . ' ' . "<p/>
        <a href='http://localhost/forum/modifyArticle/$id'>Modifier</a>
        <a href='http://localhost/forum/deleteArticle/$id'>Supprimer</a>
        <br/>");
    }
    ?>
</body>
</html>