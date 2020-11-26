<?php
session_start();
$_SESSION['name'] = $_GET['name'];
?>
<a href="/next.php">Next</a>