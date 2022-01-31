<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
</head>
<body>
    <form method="POST" action='<?= "/forum/modify/$id" ?>'>
    <label for="title">Title</label>
    <input type="text" name="title" value="<?= $article->getTitle() ?>">
    <label for="author">Author</label>
    <input type="text" name="author" value="<?= $article->getAuthor() ?>">
    <input type="submit" value="modifier">
</form>
</body>
</html>