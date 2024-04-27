<?php
require_once 'RestoranController.php';

$userController = new userController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $userController->insert($username, $email, $password);
}

else {
    include 'InsertForm.php';
}

?>