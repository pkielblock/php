<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statement</title>
</head>
<body>
    <form action="21-switchStatement.php" method="post">
        <label>
            What was your grade? <input type="text" name="grade">
        </label>
        <input type="submit">
    </form>
    <?php
        $grade = $_POST['grade'];

        switch ($grade){
            case 'A':
                echo 'You did amazing';
                break;
            case 'B':
                echo 'You pretty good';
                break;
            case 'C':
                echo 'You did poorly';
                break;
            case 'D':
                echo 'You did very bad';
                break;
            case 'F':
                echo 'You failed';
                break;
            default:
                echo 'Invalid grade';
        }
    ?>
</body>
</html>