
<?php
include_once ('./crud.php');

if (isset($_POST['login'])) {
    unset($_POST['login']);
    loginUser ($_POST);
    header('location: ../addProduct.php');
}


