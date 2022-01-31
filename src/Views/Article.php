<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
    <form action="/forum/add" method="POST">

        <label for="title">TITLE :</label>
        <input type="text" name="title">

        <label for="resume">RESUME :</label>
        <input type="text" name="resume">

        <label for="author">AUTHOR :</label>
        <input type="text" name="author">

        <label for="editor">EDITOR :</label>
        <input type="text" name="editor">

        <label for="isbnNum">ISBN</label>
        <input type="number" name="isbnNum">

        <label for="note">NOTE :</label>
        <input type="number" name="note">

        <input type="submit", value="ajouter">


    </form>
    
</body>
</html>