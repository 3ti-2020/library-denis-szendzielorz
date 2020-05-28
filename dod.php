<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lib';

$conn = new mysqli($servername, $username, $password, $dbname);

$sql="INSERT INTO autorzy(id_autor, Imię, Nazwisko) VALUES (NULL, '".$_POST['Imię']."', '".$_POST['Nazwisko']."') ";

mysqli_query($conn, $sql);
$id_autor = $conn->insert_id;

$sql="INSERT INTO tytuly(id_tytul, tytul, ISBN) VALUES (NULL, '".$_POST['tytul']."', '".$_POST['ISBN']."') ";

mysqli_query($conn, $sql);
$id_tytul = $conn->insert_id;

$sql="INSERT INTO ksiazka(id_ksiazki, id_autor, id_tytul) VALUES (NULL, '$id_autor', '$id_tytul') ";

mysqli_query($conn, $sql);
mysqli_close($conn);
header('Location: lib.php');
?>