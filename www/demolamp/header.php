<?php
if(!isset($_SESSION)) {
    session_start();
}

$clubstr = 'Lamp Project';
$userstr = 'Welcome Guest';

echo <<<_INIT
<!DOCTYPE html> 
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src='javascript.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Lora|Muli|Source+Sans+Pro|Playfair+Display&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='css/styles.css'>
        <title>$clubstr: $userstr</title>
        </head>
_INIT;

require_once 'functions.php';

if (isset($_SESSION['user'])) {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_HEADER_OPEN
    
    <body>
        <div id="wrapper">
        <header >
            <div id='logo'>$clubstr</div>
_HEADER_OPEN;

if ($loggedin) {
echo <<<_LOGGEDIN

            <nav><ul>
                <li><a href='members.php?view=$user'>Home</a></li>
                <li><a href='members.php'>Members</a></li>
                <li><a href='friends.php'>Friends</a></li>
                <li><a href='messages.php'>Messages</a></li>
                <li><a href='profile.php'>Edit Profile</a></li>
                <li><a href='logout.php'>Log out</a></li>
            </ul></nav>
_LOGGEDIN;
} else {
echo <<<_GUEST

            <nav><ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='index.php'>Giga Dab</a></li>
                <li><a href='signup.php'>Sign Up</a></li>
                <li><a href='login.php'>Log In</a></li>
            </ul></nav>
_GUEST;
 }

echo <<<_HEADER_CLOSE

        </header>
        <div class='username'>$userstr</div>
        <div id="content">
_HEADER_CLOSE;

?>
