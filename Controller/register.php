<?php
require_once 'RestoranModel.php';

$userModel = new userModel();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $userModel->insert($username, $email, $password);
}

else {
    include 'InsertForm.php';
}

?>