<?php
session_start();
include_once("db_config.php");

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy'])) {
    $email = $_POST['email'];
    $password = $_POST["password"];
}