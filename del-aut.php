<?php
    $servername = "localhost";
    $username ="root";
    $password ="";
    $dbname ="lib";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql="DELETE FROM autorzy where id_autor=".$_POST['id_autor'].";";

    echo($sql);
    $conn->query($sql);
    header('Location: lib.php');
    ?>

