<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello <?php echo $_SESSION['username']; ?>!</h2>
    <p>Welcome to the dashboard page.</p>

    <?php
    $testhash = "testing";
    echo "this is password_hash: " . password_hash($testhash, PASSWORD_DEFAULT);
    echo"<br>";
    echo "this is md5: " . md5($testhash);

    ?>
    <a href = "logout.php">Logout</a>
</body>
</html>