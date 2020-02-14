<?php
require_once 'connection.php';
$db = new Connection();
$errMessage = '';

// check if button 'Ritorna a home' is pressed, then redirect to homepage
if(isset($_POST['submitIndex']))
    header("Location: index.php");

// check if button 'LOGIN' is pressed, then try to login
if(isset($_POST['submit'])) {
    // check if username and password fields not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // prepare query then execute query, it must return 1 row
        $stmt = $db->prepare('SELECT * FROM utenti WHERE username = ? AND password = ?');
        $stmt->execute(array($_POST['username'], $_POST['password']));

        // count rows returned after the execution of the query for login, if 1 it's correct
        if($stmt->rowCount() == 1){
            /*
            foreach ($stmt as $item) {
            echo $item['username'];
            }
            */

            // activate session, then insert username into the SESSION var associated to the username
            // then redirect to homepage
            $errMessage = '';
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header("Location: .");

        }
        else{
            $errMessage = '<p name = align="center"><font color=red>CREDENZIALI NON CORRETTE.</font></p>';
            // print '<p name = align="center"><font color=red>CREDENZIALI NON CORRETTE.</font></p>';
        }




    }
}
?>


    <!DOCTYPE html>
    <html lang="it">
    <title>noteXchange</title>
    <head><h1 align="center">noteXchange</h1></head>
    <body>
    <form action="" method="post" align="center" style="width: 15%; margin:0 auto;">
        <fieldset>
            <label>Username: </label>
            <input name="username" type="text" placeholder="Enter username">
        </fieldset>
        <fieldset>
            <label>Password: </label>
            <input name="password" type="password" placeholder="Password">
        </fieldset>
        </br>
        <td><input type="submit" name="submit" value="LOGIN"></td>
        <td><input type="submit" name="submitIndex" value="Ritorna a Home"></td>

        <?php
        print $errMessage;
        ?>

    </form>
    </br>



    </body>
    </html>

    <?php
    /*
    if ($stmt) {
        header("Location: index.php");
    } else {
        echo "<p><font color=red>CREDENZIALI NON CORRETTE.</font></p>";
    }

}
    */

?>
