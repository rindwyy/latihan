<?php

session_start();

session_unset();
// untuk menghapus semua variable session

session_destroy();
// untuk menghapus session dan mengembalikan ke halaman login

header('Location: login.php');

?>