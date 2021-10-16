<?php
if(!isset($_SESSION)) {
    session_start();
}
require_once 'header.php';

echo "hello";
require_once 'footer.php';
?>