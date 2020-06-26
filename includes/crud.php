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

    $nome = $data['nome'];
    $sobre = $data['sobrenome'];
    $email = $data['email'];
    $cpf = $data['cpf'];
    $senha = password_hash($data['senha'],PASSWORD_DEFAULT);


    $sql = "INSERT INTO clientes ($campos) VALUES ('$nome','$sobre','$email','$cpf','$senha')";

    $conn->query($sql);

    //var_dump($sql);
}

function updateData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    
    extract($data);
    $securePass = password_hash($senha,PASSWORD_DEFAULT);
    $sql = "UPDATE clientes SET
    nome = '$nome',
    sobrenome ='$sobrenome',
    email ='$email',
    cpf ='$cpf',
    senha ='$securePass'
    WHERE email = '{$data['email']}'";


    $conn->query($sql);
}

function deleteData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');

    $sql = "DELETE FROM clientes WHERE email ='{$data['email']}'";

    $conn->query($sql);
}
