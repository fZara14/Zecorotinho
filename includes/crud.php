<?php

function read()
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = 'SELECT * FROM clientes';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function insertData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $campos = implode(",", array_keys($data));
    $valores = implode("','", $data);

    $sql = "INSERT INTO clientes ($campos) VALUES ('$valores')";

    $conn->query($sql);

    //var_dump($sql);
}

function updateData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    
    extract($data);

    $sql = "UPDATE clientes SET
    nome = '$nome',
    sobrenome ='$sobrenome',
    email ='$email',
    cpf ='$cpf',
    senha ='$senha'
    WHERE email = '{$data['email']}'";

    $conn->query($sql);
}

function deleteData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');

    $sql = "DELETE FROM clientes WHERE email ='{$data['email']}'";

    $conn->query($sql);
}

function readComments()
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = 'SELECT * FROM comentarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function insertComment($data)
{
    $conn = include_once(__DIR__ . '/connection.php');

    $sql = "INSERT INTO comentarios (comentario) VALUES ('$data')";

    $conn->query($sql);
}

function deleteComment($data)
{
    $conn = include_once(__DIR__ . '/connection.php');

    $sql = "DELETE FROM comentarios WHERE idComentario = ('$data')";

    $conn->query($sql);
}

function readProducts()
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function displayProduct($id)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM produtos WHERE idProduto = ('$id')";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}