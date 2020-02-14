<?php
require 'connection.php';
$db = new Connection();

session_start();
?>


<!DOCTYPE html>
<html lang="it">
<title>noteXchange</title>

<head><h1 align="center">noteXchange</h1></head>
<body>
<div align="center" style="width:20%; margin:0 auto;"

</div>
</body>
</html>

<?php
/*
$tmp = $db->query('SELECT * FROM corsi');
//$tmp->fetch(); //-1 value

foreach ($tmp as $row)
    echo $row['idcorso'].' '.$row['nome'].' '.$row['docente']. '<br>';
*/



if(isset($_SESSION['username'])) {
    echo 'SEI LOGGATO come utente:'.$_SESSION['username'];

    print '<br><a href="logout.php"><Button>LOGOUT</Button></a>';

}else{
    if(!isset($_SESSION['username'])){?>
        <a href="login.php"><Button style="width:auto; margin:0 auto;">ENTRA</Button></a>
        <a href="registration.php"><Button style="width:auto; margin:0 auto;">REGISTRATI</Button></a>
<?php
}}
?>


