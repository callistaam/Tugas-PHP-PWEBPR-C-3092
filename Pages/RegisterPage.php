<?php
require_once("../Controller/userController.php");
require_once("../Helper/connection.php");

$userController = new userController();
$error = array();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Invalid email format";
    }

    if(empty($error)) {
        $sql = "SELECT * FROM tbl_users WHERE username = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $error[] = "Username already exist!";
        } else {
            if($userController->insert($username, $email, $password)) {
                header("Location: Dashboard.php");
                exit;
            } else {
                $error[] = "Registration failed";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterPage.css">
    <title>3092-pwebpr4</title>
</head>
<body>    
    <div class="container">
        <div class="box1">
            <div class="title-kiri"> Already Have <br> an account?</div>
            <a href="LoginPage.php">
                <button class="btn-kiri">LOG IN</button>
            </a>
        </div>
        
        <div class="box2">
            <form action="RegisterPage.php" method="POST">
                <div class="title-kanan">SIGN UP</div>
                <?php
                if(!empty($error)){
                    foreach($error as $errMsg){
                        echo '<span class="error-msg">'.$errMsg.'</span>';
                    }
                }
                ?>

                <div class="form">
                    <label class="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    
                    <label class="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label class="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    
                    <button type="submit" name="submit" value="register now" class="btn-kanan">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
