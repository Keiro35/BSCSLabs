<?php
session_start();

$defaultUsername = "jom123";
$defaultPassword = "password123";

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($defaultUsername == $username && $defaultPassword == $password){
        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();
    } else{
        $message = "Invalid Credentials";
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h3>Login Page</h3>
<body>
    <form method="POST">
        <label for="username">Enter your username:
            <input type="text" placeholder="Username" name="username">
        </label>
        <label for="password">Enter Password:
            <input type="password" placeholder="Password" name="password">
        </label>
        <button type="submit">Log-in</button>
    </form>
    <p style="color: red">
        <?php echo $message; ?>
    </p>
</body>
</html>