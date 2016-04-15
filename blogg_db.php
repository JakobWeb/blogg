<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title>Bloggsida</title>
        <link rel="stylesheet" href="style.css">
        <script src=""></script>
    </head>
    <body>
        <?php
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
            $sql = "SELECT * FROM bloggen";

            $result = $conn->query($sql);

            if(!$result) {
                die("Kunde inte köra " . $conn->error);
            }

            //Berätta hur många inlägg vi har
            echo "<p>Hittade " . $result->num_rows . " inlägg</p>";

            //Hämtar ut alla inlägg
            while($row = $result->fetch_assoc()) {
                echo "<article>";
                echo "<h3>" . $row['rubrik'] . "</h3>";
                echo "<h4>" . $row['tidstampel'] . "</h4>";
                echo "<p>" . $row['inlagg'] . "</p>";
                echo "</article>";
            }

            //Stäng anslutningen
            $result->free();
            $conn->close();
        ?>
    </body>
</html>
