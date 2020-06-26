<?php

include_once ('./crud.php');

if (isset($_POST['register'])) {
    unset($_POST['register']);
    insertData ($_POST);
    header('location: ../register.php');
}

if (isset($_POST['update'])) {
    unset($_POST['update']);
    updateData ($_POST);
    header('location: ../register.php');
}

if (isset($_POST['delete'])) {
    unset($_POST['delete']);
    deleteData ($_POST);
    header('location: ../register.php');
}

if (isset($_POST['comentar'])) {
    unset($_POST['comentar']);
    insertComment (htmlspecialchars($_POST['comentario']));
    header('location: ../product-single.php');
}

if (isset($_POST['excluirComentario'])) {
    deleteComment($_POST['excluirComentario']);
    header('location: ../product-single.php');
}