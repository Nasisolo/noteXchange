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
/* // test query
$tmp = $db->query('SELECT * FROM corsi');
//$tmp->fetch(); //-1 value

foreach ($tmp as $row)
    echo $row['idcorso'].' '.$row['nome'].' '.$row['docente']. '<br>';
*/



if(isset($_SESSION['username'])) {
    echo 'SEI LOGGATO come utente: '.$_SESSION['username'];

    echo '<br><br><a href="addCourse.php">Inserisci corso</a>';
    echo '<br><a href="addNote.php">Inserisci appunto</a>';
    echo '<br><a href="viewCourses.php">Visualizza corsi</a>';

    echo '<br><br><br>
    <form action="search.php" method="post">
      <input type="text" placeholder="Ricerca..." name="search">
      <button type="submitSearch">cerca</button>
    </form>
    ';

    //echo '<br><a href="search.php">Ricerca negli appunti</a>';
    echo '<br><br><a href="logout.php"><Button>LOGOUT</Button></a>';


}else{
    if(!isset($_SESSION['username'])){?>
        <a href="login.php"><Button style="width:auto; margin:0 auto;">ENTRA</Button></a>
        <a href="registration.php"><Button style="width:auto; margin:0 auto;">REGISTRATI</Button></a>
<?php
}}
?>


