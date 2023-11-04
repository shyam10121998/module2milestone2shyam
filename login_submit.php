<?php
require('db_connection.php');

$hashPassword = md5($_POST['password']);

if ($_POST['password'] && $_POST['username']) {

    $checkUserExist = "SELECT `id` from `users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$hashPassword}' LIMIT 1";
    $result = $mysqli->query($checkUserExist);