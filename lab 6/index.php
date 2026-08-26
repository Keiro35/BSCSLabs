<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="content"></p>

    <input type="text" id="name" placeholder="Enter your name">
    <button onclick = "hello()">Submit</button>

    <script>
        function hello(){
            let name = document.getElementById("name").value;
            document.getElementById("content").innerHTML = "Hello " + name
            setTimeout(() => {
                alert("I miss you " + name)
            }, 500);
        }
    </script>

    <!-- <img src="james.png" id="image" alt="">

    <button onclick="document.getElementById('image').src='fake.png', hello()">On</button>
    <button onclick="document.getElementById('image').src='james.png', hi()">Off</button>

    <script>
        function hello(){
            alert("I Love James Ban");
        }

        function hi(){
            alert("James Ban my GOAT");
        }
    </script> -->
</body>
</html>