<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="item a">
            <h1>Książki i autorzy</h1>
        </div>

        <div class="item b">
        <form action="dod.php" method="post" class="insert">
                    <input type="text" name="Imię" placeholder="Imię">
                    <input type="text" name="Nazwisko" placeholder="Nazwisko">
                    <input type="text" name="tytul" placeholder="tytul">
                    <input type="text" name="ISBN" placeholder="ISBN">
                    <input type="submit" value="Dodaj">
                </form>

    
        </div>


        <div class="item c">
        <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "lib";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $result1 = $conn->query("SELECT id_ksiazki, Imię, Nazwisko, tytul FROM ksiazka, autorzy, tytuly WHERE ksiazka.id_autor=autorzy.id_autor AND ksiazka.id_tytul=tytuly.id_tytul");

                    echo("<table class='tabelka' border=1>");
                    echo("<tr>
                    <th>id_ksiazki</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Tytuł</th>
                    </tr>");

                    while($row=$result1->fetch_assoc() ){
                        echo("<tr>");
                        echo("<td>".$row['id_ksiazki']."</td>");
                        echo("<td>".$row['Imię']."</td>");
                        echo("<td>".$row['Nazwisko']."</td>");
                        echo("<td>".$row['tytul']."</td>");
                        echo("</tr>");
                    }
                    echo("</table>")
                    ?>
        </div>


                <div class="item d">
                <h2> Podaj id książki, którą chcesz usunąć: </h2>
                <form class="form" action="del-ks.php" method="POST">
                <input type="text" name="id_ksiazki"/>
                <br/>
                <input type="submit" value="Usuń"/>
                </form>
                <br/><br/>

                <h2> Podaj id autora, którego chcesz usunąć: </h2>

                <form class="form" action="del-aut.php" method="POST">
                <input type="text" name="id_autor"/>
                <br/>
                <input type="submit" value="Usuń"/>
                </form>
                <br/><br/>
        </div>


        <div class="item e">

        </div>
</body>
</html>