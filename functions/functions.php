<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    

    calculate($num1, $num2);
}

function calculate($num1, $num2){
    switch($_POST['op']){
        case 'add':
            echo (int)($num1 + $num2);
            break;
        case 'sub':
            echo (int)($num1 - $num2);
            break;
        case 'mul':
            echo (int)($num1 * $num2);
            break;
        case 'div':
            echo (int)($num1 / $num2);
            break; 
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
<body>
    <form method="POST">
        <input type="text" name="num1">
        <br><br>
        <input type="text" name="num2">
        <br><br>
        <select name="op" id="">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <br><br>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>