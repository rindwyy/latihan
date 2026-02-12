<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {
    if($_POST["username"] === "admin" && $_POST["password"] === "password") {
        $_SESSION["isLoggin"] = "login";
        header("Location: dashboard.php");
    } else {
        echo "<script>
        alert('username atau password salah')
        </script>";
    }
}

?>

<form method="POST">
<label for="username">username</label>
<input type="text" id="username" name="username">
<label for="password">password</label>
<input type="password" id="password" name="password">
<button type="submit">Login</button>
</form>