<?php
require_once 'connection.php';
$db = new Connection();

session_start();
?>

<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">RISULTATI RICERCA</h2>
<body align="center">

<?php

if($_POST['search']) {
    // find which record contains the value you need
    $stmt = $db->query("SELECT * FROM appunti WHERE testo like '%{$_POST['search']}%'");

    // print a table with all the records found
    echo "<table align='center' border='1'><th>AUTORE</th><th>TITOLO</th><th>TESTO</th>";
    foreach ($stmt as $row) {
        echo "<tr><td align='center '>" . $row['username'] . "</td>
                  <td align='center'>" . $row['titolo'] . "</td>
                  <td align='center'> " . $row['testo'] . "</td>
              </tr>";
    }
    echo "</table>";

    echo "<br><br><a href='index.php'><Button>INDIETRO</Button></a><br>";
}

?>
</body>
</html>

