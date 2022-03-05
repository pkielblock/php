<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters</title>
</head>
<body>
    <form action="10-urlParameters.php" method="GET">
        <label>
            Name: <input type="text" name="name">
        </label>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_GET['name'] . PHP_EOL;
    ?>
</body>
</html>