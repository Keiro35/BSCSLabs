<?php
    $hiddenGreeting = "Hello World!";
?>

<script>
    function buttonClick(){
        document.getElementById("pressMeBtn").style.display = "none";
        document.getElementById("helloWorldText").style.display = "block";
    }
</script>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
  <body>
        <div id="top" style="text-align: center; margin-top: 40px;">

            <h2 style="font-size: 3rem; font-weight: 400; margin-bottom: 20px;">Hello World Example</h2>

            <button id="pressMeBtn" class="btn btn-success" onclick="buttonClick()" style="background-color: #2f8f4d; border: none; padding: 10px 22px; font-size: 1.1rem; border-radius: 5px;">Press me</button>

            <div id="helloWorldText" style="display: none; margin-top: 18px; font-size: 2rem; font-weight: 6S00; color: #2d9b47;">Hello World!</div>

        </div>

        <div id = "bottom">
            <h4>Technologies Used</h4>
            <table class="table table-bordered" style="border-collapse: collapse; width: 70%; margin-top: 10px;">
        <thead>
            <tr>
                <th style="background-color: #000; color: white; font-weight: bold; border: 1px solid #d9d9d9;" scope="col">Technologies Used</th>
                <th style="background-color: #000; color: white; font-weight: bold; border: 1px solid #d9d9d9;" scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #white;">HTML</td>
                <td style="border: 1px solid #white;">(For the structure and content of the webpage)</td>
            </tr>
            <tr>
                <td style="border: 1px solid #white;">CSS</td>
                <td style="border: 1px solid #white;">(For the color and design of the button and the header)</td>
            </tr>
            <tr>
                <td style="border: 1px solid #white;">JavaScript</td>
                <td style="border: 1px solid #white;">(For the interactive functionality of the button)</td>
            </tr>
            <tr>
                <td style="border: 1px solid #white;">PHP</td>
                <td style="border: 1px solid #white;">(For the server-side logic and dynamic content generation)</td>
            </tr>
            <tr>
                <td style="border: 1px solid #white;">Bootstrap</td>
                <td style="border: 1px solid #white;">(For the responsive design and pre-built components)</td>
            </tr>
        </tbody>
        </table>
        </div>
  </body>
</html>