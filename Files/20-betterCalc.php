<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Better Calculator</title>
</head>
<body>
    <form action="20-betterCalc.php" method="post">
        <label>
            Number 1: <input type="number" step="0.001" name="num1"> <br>
            Operator: <input type="text" step="0.001" name="operator"> <br>
            Number 2: <input type="number"step="0.001" name="num2"> <br>
        </label>
        <input type="submit">
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        if ($operator == '+') {
            echo $num1 + $num2;
        } elseif ($operator == '-'){
            echo $num1 - $num2;
        } elseif ($operator == '/'){
            echo $num1 / $num2;
        } elseif ($operator == '*'){
            echo $num1 * $num2;
        } else {
            echo 'Invalid Operator';
        }
    ?>
</body>
</html>