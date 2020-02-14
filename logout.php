<?php
// activate session
session_start();

// unset param 'username' then transform $_SESSION in array
unset($_SESSION['username']);
$_SESSION = array();

// then destroy session
session_destroy();

// redirect to index page
header('Location: .');
