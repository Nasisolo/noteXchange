<?php
require_once 'connection.php';
$db = new Connection();

session_start();

if(isset($_POST['submitIndex']))
    header("Location: index.php");

if(isset($_POST['submitCourse'])) {
// check if username and password fields not empty
if (!empty($_POST['cname']) && !empty($_POST['pname']) && !empty($_POST['year'])) {


    $stmt = $db->prepare('INSERT INTO corsi (nome, docente, anno) VALUES (?, ?, ?)');
    $stmt->execute(array($_POST['cname'], $_POST['pname'], $_POST['year']));

    header("Location: .");
    }
}

?>

<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">Inserisci corso</h2>
<body>
<form action="" method="post" align="center" style="width: 15%; margin:0 auto;">
    <fieldset>
        <label>Nome del Corso: </label><br>
        <input name="cname" type="text" placeholder="Inserisci nome corso">
    </fieldset>
    <fieldset>
        <label>Docente: </label><br>
        <input name="pname" type="text" placeholder="Inserisci nome del docente">
    </fieldset>
    <fieldset>
        <label>Anno: </label><br>
        <input name="year" type="number" placeholder="Inserisci anno del corso">
    </fieldset>
    </br>
    <td><input type="submit" name="submitCourse" value="INSERISCI CORSO"></td>
    <td><input type="submit" name="submitIndex" value="Ritorna a Home"></td>


</form>
</br>
</body>
</html>

