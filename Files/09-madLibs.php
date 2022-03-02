<html lang="en-US">
<meta charset="UTF-8">
<head>
    <title>Mad Libs Game</title>
</head>
<body>
    <form action="09-madLibs.php">
        <label>
            Color: <input type="text" name="color"> <br>
        </label>
        <label>
            Plural Noun: <input type="text" name="pluralNoun"> <br>
        </label>
        <label>
            Celebrity: <input type="text" name="celebrity"> <br>
        </label>
        <input type="submit">
    </form>
    <br><br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];


        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
</body>
</html>