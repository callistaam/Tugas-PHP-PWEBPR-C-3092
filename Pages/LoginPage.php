<?php
require_once("../Helper/connection.php");

session_start();

if(isset($_SESSION['user_id'])) {
    header("Location: Dashboard.php");
    exit;
}

$error = array();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: Dashboard.php");
        exit;
    } else {
        $error[] = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginPage.css">
    <title>3092-pwebpr4</title>
</head>
<body>    
    <div class="container">
        <div class="box1">
            <div class="title-kiri"> Don’t Have an <br> account?</div>
            <a href="RegisterPage.php">
                <button class="btn-kiri">SIGN UP</button>
            </a>
        </div>
        
        <div class="box2">
            <div class="title-kanan">LOG IN</div>
            <?php
            if(!empty($error)){
                foreach($error as $errMsg){
                    echo '<div class="error-msg">'.$errMsg.'</div>';
                }
            }
            ?>
            <form action="LoginPage.php" method="POST">
                <div class="form">
                    <label class="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label class="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                    
                <div class="flex_row">
                    <div class="desc-kanan flex_row"> Forgot Password? </div>
                    <button type="submit" name="submit" class="btn-kanan">LOG IN</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
