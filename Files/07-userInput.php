<html lang="en-US">
<meta charset="UTF-8">
<head>
    <title>ge user input</title>
</head>
<body>
    <form action="07-userInput.php" method="GET">
        <label>
            Name: <input type="text" name="name">
        </label>
        <label>
            Age: <input type="number" name="age">
        </label>
        <input type="submit">
    </form>
    <br>
    <?php
        echo "Your name is: " . $_GET["name"];
        echo '<br>';
        echo "Your age is: " . $_GET["age"];
    ?>
</body>
</html>


