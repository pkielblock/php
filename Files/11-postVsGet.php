<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST VS GET</title>
</head>
<body>
    <form action="11-postVsGet.php" method="POST">
        <label>
            Password: <input type="password" name="password">
        </label>
        <input type="submit">
    </form>
    <?php
        echo $_POST['password'];
    ?>
</body>
</html>