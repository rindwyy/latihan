<?php

session_start();

if($_SESSION["isLoggin"] != "login") {
    header("Location: login.php");
    exit();
}

?>

<h1>Halaman dashboard</h1>
<p>Welcome</p>
<p>fitur 1</p>
<a href="logout.php">Logout</a>