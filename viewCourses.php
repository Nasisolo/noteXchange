<?php
require_once 'connection.php';
$db = new Connection();

session_start();
?>

<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">Visualizza corsi</h2>
<body align="center">

<?php
    $stmt = $db->prepare("SELECT * FROM corsi");
    $stmt->execute();

    // show all the course in the database, when a course is clicked, redirect to the page that show all available lessons
    echo "<table align='center'><th>ID</th><th>NOME</th><th>DOCENTE</th><th>ANNO</th>";
    foreach ($stmt as $row) {
        echo "<tr><td align='center '>". $row['idcorso']."</td>
                  <td align='center'><a href='viewLessons.php?id=". $row['idcorso'] ."'>".$row['nome']."</a></td>
                  <!--<td align='center'>".$row['nome']."</td> -->
                  <td align='center'>".$row['docente']."</td>
                  <td align='center'> ".$row['anno']."</td>
              </tr>";
    }
    echo "</table>";
?>

<br><br><a href="index.php"><Button>INDIETRO</Button></a><br>

</body>
</html>

