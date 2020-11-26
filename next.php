<?php
session_start();
$name = $_SESSION['name'];
?>
<h1><?= $name ?></h1>