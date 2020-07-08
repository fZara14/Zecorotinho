<?php

include_once ('./crud.php');

if (isset($_POST['register'])) {
    unset($_POST['register']);
    insertData ($_POST);
    header('location: ../login.php');
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
    $id = $_GET['id'];
    deleteComment($_POST['excluirComentario']);
    header("location: ../product-single.php?id={$id}");
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

if (isset($_POST['btnVinho'])) {
    unset($_POST['btnVinho']);
    header("location: ../product.php?categoria=vinho");
}

if (isset($_POST['btnGin'])) {
    unset($_POST['btnGin']);
    header("location: ../product.php?categoria=gin");
}

if (isset($_POST['btnRum'])) {
    unset($_POST['btnRum']);
    header("location: ../product.php?categoria=rum");
}

if (isset($_POST['btnTequila'])) {
    unset($_POST['btnTequila']);
    header("location: ../product.php?categoria=tequila");
}

if (isset($_POST['btnVodka'])) {
    unset($_POST['btnVodka']);
    header("location: ../product.php?categoria=vodka");
}

if (isset($_POST['btnWhiskey'])) {
    unset($_POST['btnWhiskey']);
    header("location: ../product.php?categoria=whiskey");
}

if (isset($_POST['addToCart'])) {
    insertCart();
    //header("location: ../product.php?categoria=todos");
}