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
    $id = $_GET['id'];
    insertComment (htmlspecialchars($_POST['comentario']), $id);
    header("location: ../product-single.php?id={$id}");
}

if (isset($_POST['excluirComentario'])) {
    deleteComment($_POST['excluirComentario']);
    header('location: ../product-single.php');
}

if (isset($_POST['insertProduct'])) {
    unset($_POST['insertProduct']);
    insertProduct ($_POST);
    header('location: ../addProduct.php');
}

if (isset($_POST['updateProduct'])) {
    unset($_POST['updateProduct']);
    updateProduct ($_POST);
    header('location: ../addProduct.php');
}

if (isset($_POST['deleteProduct'])) {
    unset($_POST['deleteProduct']);
    deleteProduct ($_POST);
    header('location: ../addProduct.php');
}