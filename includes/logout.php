
<?php
include_once ('./crud.php');

session_start();
if (!isset($_SESSION['login'])) {
		header('location:./login.php');
}

if (isset($_POST['logout'])) {
    unset($_POST['logout']);
    logout ($_POST);
    header('location: ../index.php');
}

