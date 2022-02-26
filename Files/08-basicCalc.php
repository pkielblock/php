<html lang="en-US">
<meta charset="UTF-8">
<head>
    <title>Basic Calculator</title>
</head>
<body>
    <div>
        <form action="08-basicCalc.php" method="GET">
            <label>
                <input type="number" name="num1">
            </label>
            <br>
            <label>
                <input type="number" name="num2">
            </label>
            <br>
            <input type="submit">
        </form>
    </div>
    <br>
    <?php
        echo $_GET["num1"] + $_GET["num2"];
    ?>
</body>
</html>