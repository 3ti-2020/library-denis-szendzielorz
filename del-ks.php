<?php
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname ="lib";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql="DELETE FROM ksiazka where id_ksiazki=".$_POST['id_ksiazki'].";";

    echo($sql);
    $conn->query($sql);
    header('Location: lib.php');
    ?>