<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset = "UTF-8">
    <title>baza</title>
    <form method = "POST">
        Imie <input type = "TEXT" name = "imie"><br>
        Drugie Imie <input type = "TEXT" name = "imie2"><br>
        <input type = "submit" name = "rezerwacja" value = "rezerwacja">
    </form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "jaqob00";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if(isset($_POST["rezerwacja"])){
            $imie = $_POST["imie"];
            $imie2 = $_POST["imie2"];
            $sql = "INSERT INTO dane(ID, IMIE, IMIE2) VALUES (NULL, '$imie', '$imie2')";
            if(mysqli_query($conn, $sql)){
                echo "Dodano rekord";
            }
        }
        $conn -> close();
        ?>
</head>
    <body>
    <?php

    ?>
    </body>
</html>
