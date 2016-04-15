<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Spara blogginlägg</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <?php
            $rubrik = $_POST['rubrik'];
            $inlagg = nl2br($_POST['inlagg'], false);



            //Databasuppgifter
            $host = "localhost";
            $user = "jyberg_user";
            $pass = "jyberg_pass";
            $db = "jyberg_db";

            //Anslutning till databasen
            $conn = new mysqli($host, $user, $pass, $db);

            //Om någonting går fel avsluta med ett felmeddelande

            if ($conn->connect_error) {
                die("Kunde inte ansluta till databasen. " . $conn->connect_error);
            }

            //SQL-kommando
            $sql = "INSERT INTO bloggen (rubrik, inlagg) VALUES ('$rubrik', '$inlagg')";

            $result = $conn->query($sql);

            if(!$result) {
                die("Kunde inte köra " . $conn->error);
            }
            else {
                echo "Ditt inlägg har lagts upp.";
            }

            //Stäng anslutningen
            $conn->close();
        ?>
    </body>
</html>
