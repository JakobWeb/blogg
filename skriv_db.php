<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Skriv blogginlägg</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <h2>Skriv blogginlägg<</h2>
        <form method="post" action="spara_db.php">
            <label>Rubrik</label><input name="rubrik" type="text" maxlength="100"> <br>
            <label>Inlägg</label>
            <textarea name="inlagg">
            </textarea> <br>
            <input type="submit" value="Skicka">
        </form>
    </body>
</html>
