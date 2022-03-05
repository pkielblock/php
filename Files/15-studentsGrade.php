<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
<form action="15-studentsGrade.php" method="post">
    <label>
        Student: <input type="text" name="student">
    </label>
    <input type="submit">
</form>
    <?php
        $grades = [
            'Jim' => 'A+',
            'Pam' => 'A+',
            'Oscar' => 'C+'
        ];

        echo $grades[$_POST['student']];
    ?>
</body>
</html>
