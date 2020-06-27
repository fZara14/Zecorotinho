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

/* function readComments()
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = 'SELECT * FROM comentarios';
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
} */

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
 function loginUser ($data)
 {   $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM clientes WHERE email = '{$data['email']}'";
    $result = $conn->query($sql);
    $resultado = $result->fetch_array(MYSQLI_ASSOC);
    $senha = $data['pass'];
    $verificar = $resultado['senha'];
    var_dump(password_verify($senha , $verificar));
    if (password_verify($senha , $verificar)) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Logado com Sucesso');window.location
        .href='../addProduct.php';</script>";
        die();
    }else {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../login.php';</script>";
        die();
    }
 }

 function insertProduct($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $campos = implode(",", array_keys($data));
    
    $nomeProduto = $data['nomeProduto'];
    $preco = $data['preco'];
    $categoria = $data['categoria'];
    $url = $data['url'];
    $descricao = $data['descricao'];

    $sql = "INSERT INTO produtos ($campos) VALUES ('$nomeProduto','$preco','$categoria','$url','$descricao')";

    $conn->query($sql);
}

function updateProduct($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    
    extract($data);
    $sql = "UPDATE produtos SET
    nomeProduto = '$nomeProduto',
    preco ='$preco',
    descricao ='$descricao',
    url ='$url',
    categoria ='$categoria'
    WHERE nomeProduto = '$nomeProduto'";

    $conn->query($sql);
}

function deleteProduct($data)
{
    $conn = include_once(__DIR__ . '/connection.php');

    $sql = "DELETE FROM produtos WHERE nomeProduto ='{$data['nomeProduto']}'";

    $conn->query($sql);
}