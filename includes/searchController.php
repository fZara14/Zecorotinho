
<?php
include_once ('./crud.php');

if (isset($_POST['searchProduct'])) {
    unset($_POST['searchProduct']);
    search($_POST);
    header('location: ../produtos.php');
}