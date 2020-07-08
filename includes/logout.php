
<?php
include_once ('./crud.php');

if (isset($_POST['logout'])) {
    unset($_POST['logout']);
    logout ($_POST);
    header('location: ../index.php');
}

