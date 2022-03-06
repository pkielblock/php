<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validate Filters</title>
</head>
<body>
    <?php
        $age = $_POST['age'];
        $email = $_POST['email'];
        $weight = $_POST['weight'];
        $ip = $_POST['ip'];
        $url = $_POST['url'];

        if (isset($_POST['send'])) {
            $errors = array();

            if (!$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT)) {
                $errors[] = 'Age must be an integer';
            }

            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email must be a valid email';
            }

            if (!$weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT)) {
                $errors[] = 'Weight must be a float';
            }

            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $errors[] = 'IP must be a valid IP Address';
            }

            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $errors[] = 'URL must be a valid URL Address';
            }

            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo '<li>';
                    echo $error;
                    echo '</li>';
                }
            } else {
                echo 'Success, your data is OK.';
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Age: <input type="number" name="age"> <br>
        Email: <input type="email" name="email"> <br>
        Weight: <input type="number" step="0.01" name="weight""> <br>
        IP: <input type="text" name="ip"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>
