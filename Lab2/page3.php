<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $title = "Page 3 - My favorite Game";
        echo "<title>{$title}</title>";
    ?>
</head>
<body>
    <?php
        $header = "<h3>Page 3 <h3><br>This is my Favorite Game!";
        echo $header;
        echo "<br><img src='https://mediaproxy.tvtropes.org/width/1200/https://static.tvtropes.org/pmwiki/pub/images/valo2.png' width=20%>";
        echo "<br> This game is called Valorant!";
    ?>
    <br><br><br>
    <a href='page1.php'>Page 1 - Starting Page</a><br>
    <a href='page2.php'>Page 3 - My favorite Anime</a>
</body>
</html>