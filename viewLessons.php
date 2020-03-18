<?php
require_once 'connection.php';
$db = new Connection();

session_start();


if($_GET['id']) {
    // generate title of the page based on course name
    $titleQuery = $db->prepare('SELECT nome FROM corsi WHERE idcorso = ?');
    $titleQuery->execute(array($_GET['id']));
    foreach ($titleQuery as $row)
        $titleLesson = $row['nome'];
}
?>


<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">Lezioni di <?php echo $titleLesson; ?></h2>
<body align="center">

<?php
    // get all the available lessons for that course
    $stmt = $db->prepare('SELECT DISTINCT lezione FROM appunti WHERE idcorso = ?');
    $stmt->execute(array($_GET['id']));

    echo "<table align='center'><th>NUMERO LEZIONE</th>";
    foreach ($stmt as $row){
        // redirect to the page of notes of a lesson in a particular course after clicking
        echo "<tr><td align='center'><a href='viewNotes.php?id=". $_GET['id'] ."&lesson=" . $row['lezione'] ."'>LEZIONE: ".$row['lezione']."</a></td></tr>";
    }
    echo "</table>";
?>

<br><br><a href="viewCourses.php"><Button>INDIETRO</Button></a><br>

</body>
</html>