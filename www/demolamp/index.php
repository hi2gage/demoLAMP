<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once 'header.php';
// require_once 'sidebar.php';

echo "<h3>Welcome to $clubstr. </h3>";
echo "<div>";

echo <<<_para
    <p> This is a website for the Band Midnight Maintenance </p>
    <p> We are a collect of two college students spendign time in their bedrooms playing music
    and chasing dreams. </p>

_para;

echo "<br>";


if ($loggedin) 
    echo " $user, you are logged in";
else           
    echo 'Please sign up, or log in if you\'re already a member.';

echo <<<_END
    </div><br>
_END;

require_once 'footer.php';
?>