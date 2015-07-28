<?php
session_start();
unset($_SESSION['name']);

session_destroy();

include 'TopPage.php';

?>