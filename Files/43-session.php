<?php

// A session can store variables and share them among all pages of your website.

// Start session
session_start();

// create/change session variable
$_SESSION['name'] = 'Peter';
$_SESSION['profession'] = 'Student';

var_dump($_SESSION['name']);
var_dump($_SESSION['profession']);

$_SESSION['profession'] = 'Back-End Developer';

var_dump($_SESSION['profession']);

// Remove all session variables
session_unset(); // or $_SESSION = array(); (Thats an empty array)

// Destroy session
session_destroy();
