<?php

// Creating a cookie to save a name;
setcookie('name', 'Peter', time()+(86400 * 30));

// Changing a cookie;
setcookie('name', 'John', time()+(86400));

// Deleting a cookie;
setcookie('name', '', time() - 3600);

// Verifying if there is a name cookie;
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo 'Your name is ' . $name . PHP_EOL;
} else {
    echo 'There is no cookie name.'  . PHP_EOL;
}

// Verifying if there is any cookie;
if (count($_COOKIE) > 0) {
    echo 'There is cookies.' . PHP_EOL;
} else {
    echo 'There is no cookies at all.' . PHP_EOL;
}
