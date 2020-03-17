<?php
require_once 'connection.php';
$db = new Connection();

$errMessage = '';
session_start();



// check if 'Ritorna a Home' is pressed, then redirect to index.php
if(isset($_POST['submitIndex']))
    header("Location: index.php");

// check if button to submit a note is pressed, then check fields
if(isset($_POST['submitNote'])) {
// check if fields aren't empty
    if (!empty($_POST['courseSelector']) && !empty($_POST['lesson']) && !empty($_POST['title']) && !empty($_POST['textnote'])) {

        /*  //test query
         * INSERT INTO `appunti` (`username`, `idcorso`, `lezione`, `titolo`, `testo`)
                VALUES
	            ('nasi', '1', '1', 'Alberi binari', 'testo di prova: lezione su Alberi binari')
         */

        // prepare query to insert a note in table 'appunti' and execute
        $errMessage = '';
        $stmt = $db->prepare('INSERT INTO appunti (username, idcorso, lezione, titolo, testo) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($_SESSION['username'], $_POST['courseSelector'], $_POST['lesson'], $_POST['title'], $_POST['textnote']));

        // then redirect to home page
        header("Location: .");
    }else{
        // change error message if fields are empty
        $errMessage = '<p name = align="center"><font color=red>CAMPI VUOTI.</font></p>';
    }
}

$qCourse = $db->prepare('SELECT * from corsi');
$qCourse->execute();

?>

<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/html">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2 align="center">Inserisci appunto</h2>
<body>
<form action="" method="post" align="center" style="width: 30%; margin:0 auto;">
    <fieldset>
        <label>Nome del corso: </label><br>
        <select name="courseSelector">
            <?php
                foreach ($qCourse as $row){
                    echo '<option value="' . $row['idcorso'] . '">'. $row['nome']. '</option>';
                }
            ?>
        </select>
        <!-- <input name="idcorso" type="number" placeholder="Inserisci id del corso"> -->
    </fieldset>
    <fieldset>
        <label>Numero della lezione: </label><br>
        <input name="lesson" type="number" placeholder="Inserisci numero della lezione">
    </fieldset>
    <fieldset>
        <label>Titolo della lezione: </label><br>
        <input name="title" type="text" placeholder="Inserisci titolo della lezione">
    </fieldset>
    <fieldset>
        <label>TESTO: </label><br>
        <textarea name="textnote" rows="10" cols="70" ><?php echo "Inserisci testo";?></textarea>
    </fieldset>
    <br>
    <td><input type="submit" name="submitNote" value="INSERISCI APPUNTO"></td>
    <td><input type="submit" name="submitIndex" value="Ritorna a Home"></td>

    <?php
    echo $errMessage;
    ?>


</form>
</br>
</body>
</html>

