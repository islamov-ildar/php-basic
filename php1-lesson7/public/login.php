<?php
require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'base.php';

$login = post('login');
$password = post('password');


?>

<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="login">
</form>
