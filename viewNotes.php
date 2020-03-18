<?php
require_once 'connection.php';
$db = new Connection();

session_start();
if($_GET['id'] && $_GET['lesson']) {
    // generate title of the page based on course name and lesson number
    $titleQuery = $db->prepare('SELECT nome FROM corsi WHERE idcorso = ?');
    $titleQuery->execute(array($_GET['id']));
    foreach ($titleQuery as $row)
        $titleLesson = $row['nome'] . ' - Lezione n. ' . $_GET['lesson'] ;
}

?>

<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">Appunti di <?php echo $titleLesson; ?></h2>
<body align="center">

<?php
$stmt = $db->prepare("SELECT * FROM appunti WHERE idcorso = ? AND lezione = ?");
$stmt->execute(array($_GET['id'], $_GET['lesson']));

// show all the course in the database, when a course is clicked, redirect to the page that show all available lessons
echo "<table align='center' border='1'><th>AUTORE</th><th>TITOLO</th><th>TESTO</th>";
foreach ($stmt as $row) {
    echo "<tr><td align='center '>". $row['username']."</td>
                  <td align='center'>".$row['titolo']."</td>
                  <td align='center'> ".$row['testo']."</td>
              </tr>";
}
echo "</table>";

echo "<br><br><a href='viewLessons.php?id=". $_GET['id'] ."'><Button>INDIETRO</Button></a><br>";
?>

<!--
<br><br><a href="viewLessons.php"><Button>INDIETRO</Button></a><br>
-->
</body>
</html>

