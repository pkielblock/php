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

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$url = $_POST['url'];

if (isset($_POST['send'])) {
    $errors = array();

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        $errors[] = 'Age must be an integer';
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email must be a valid email';
    }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errors[] = 'URL must be a valid URL';
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
    Name: <input type="text" name="name""> <br>
    Age: <input type="text" name="age"> <br>
    Email: <input type="text" name="email"> <br>
    URL: <input type="text" name="url"> <br>
    <button type="submit" name="send">Send</button>
</form>
</body>
</html>
