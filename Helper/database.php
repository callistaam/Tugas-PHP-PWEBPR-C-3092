<!-- <?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db';

$conn = mysqli_connect($host, $username, $password, $database);

?> -->

<!-- <?php 
require_once 'env.php';

$app_name = $_ENV['APP_NAME'];
$url = $_ENV['BASEURL'];
$host = $_ENV['localhost'];
$username = $_ENV['root'];
$password = $_ENV[''];
$database = $_ENV['db'];

try {
    $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {

    header('Location: '.$url.'/views/errors/500.php?message="'.$e.'"');
}

?> -->