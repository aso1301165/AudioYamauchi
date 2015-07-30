<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['member_ID']);

session_destroy();

include 'TopPage.php';

?>