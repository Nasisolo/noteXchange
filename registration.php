<?php
require_once 'connection.php';
$db = new Connection();
$errMessage = '';

// check if button 'Ritorna a home' is pressed, then redirect to homepage
if(isset($_POST['submitIndex']))
    header("Location: index.php");

// check if button 'LOGIN' is pressed, then try to login
if(isset($_POST['submitRegistration'])) {
    // check if username and password fields not empty
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['surname'])) {
        // prepare query then execute query, it must return 1 row
        $stmt = $db->prepare('INSERT INTO utenti (username, password, nome, cognome) VALUES (?, ?, ?, ?)');
        $stmt->execute(array($_POST['username'], $_POST['password'], $_POST['nome'], $_POST['cognome']));

            /*
             * INSERT INTO `utenti` (`username`, `password`, `nome`, `cognome`)
                VALUES
	            ('nasi', 'root', 'Monan', 'Nasir'),
             */

            // activate session, then insert username into the SESSION var associated to the username
            // then redirect to homepage
            $errMessage = '';
            header("Location: .");

        }
        else{
            $errMessage = '<p name = align="center"><font color=red>CAMPI VUOTI.</font></p>';
            // print '<p name = align="center"><font color=red>CREDENZIALI NON CORRETTE.</font></p>';
        }





}
?>


<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>
<head><h1 align="center">noteXchange</h1></head>
<h2>REGISTRATI!</h2>
<body>
<form action="" method="post" align="center" style="width: 15%; margin:0 auto;">
    <fieldset>
        <label>Username: </label>
        <input name="username" type="text" placeholder="Inserisci username">
    </fieldset>
    <fieldset>
        <label>Password: </label>
        <input name="password" type="text" placeholder="Inserisci password">
    </fieldset>
    <fieldset>
        <label>Nome: </label>
        <input name="name" type="text" placeholder="Inserisci Nome">
    </fieldset>
    <fieldset>
        <label>Cognome: </label>
        <input name="surname" type="text" placeholder="Inserisci Cognome">
    </fieldset>
    </br>
    <td><input type="submit" name="submitRegistration" value="LOGIN"></td>
    <td><input type="submit" name="submitIndex" value="Ritorna a Home"></td>

    <?php
    echo $errMessage;
    ?>

</form>
</br>



</body>
</html>


