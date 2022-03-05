<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkboxes</title>
</head>
<body>
    <form action="13-checkboxes.php" method="post">
        <label>
            Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
            Bananas: <input type="checkbox" name="fruits[]" value="bananas"> <br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        </label>
        <input type="submit">
        <br> <br>
    </form>
    <?php
        $fruits = $_POST['fruits'];

        for ($i = 0; $i < count($fruits); $i++) {
            echo $fruits[$i] . PHP_EOL;
        }
    ?>
</body>
</html>