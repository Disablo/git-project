<?php

$email = $_GET["email"];
$password = $_GET["password"];

if ($email == ""){
    $answer = "email";
    header('Location: http://localhost');
    exit;
} elseif ($password == ""){
    $answer = "password";
    header('Location: http://localhost');
    exit;
}
?>

Hello, <?php echo $_GET["email"]; ?><br>
password: <?php echo $_GET["password"]; ?>
