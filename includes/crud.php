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
    $senha = password_hash($data['senha'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO clientes ($campos) VALUES ('$nome','$sobre','$email','$cpf','$senha')";
    $conn->query($sql);
}

function updateData($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    extract($data);
    $securePass = password_hash($senha, PASSWORD_DEFAULT);
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

function readProducts()
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function selectProducts($cat)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM produtos WHERE categoria = ('$cat')";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function displayProduct($id)
{
    $conn = include(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM produtos WHERE idProduto = ('$id')";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function readComments($id)
{
    $conn = include(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM comentarios WHERE idProduto = ('$id')";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function insertComment($data, $id)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "INSERT INTO comentarios (comentario, idProduto) VALUES ('$data', $id)";
    $conn->query($sql);
}

function deleteComment($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "DELETE FROM comentarios WHERE idComentario = ('$data')";
    $conn->query($sql);
}

function loginUser($data)
{
    $conn = include_once(__DIR__ . '/connection.php');
    $sql = "SELECT * FROM clientes WHERE email = '{$data['email']}'";
    $result = $conn->query($sql);
    $resultado = $result->fetch_array(MYSQLI_ASSOC);
    $senha = $data['pass'];
    $verificar = $resultado['senha'];
   
    if (password_verify($senha, $verificar)) {
        session_start();
        $_SESSION['login'] = $_POST['email'];
        $_SESSION['nome'] = $resultado['nome'];        
        $_SESSION['permission'] = $resultado['permissionId'];
        
        echo "<script language='javascript' type='text/javascript'>
        alert('Logado com Sucesso');window.location
        .href='../addProduct.php';</script>";
        die();
        return $login;
    } else {
        echo "<script language='javascript' type='text/javascript'>
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


function search($data){
    // Recuperamos a ação enviada pelo formulário
$a = $_GET;
// Verificamos se a ação é de busca
if ($data['palavra']=="") {
    echo"<script language='javascript' type='text/javascript'>
    alert('Busca vazia');window.location
    .href='../product.php?categoria=todos';</script>";
    die();
}
if (isset($data['palavra']) && !$data['palavra']=="") {

    // Pegamos a palavra
    $palavra = trim($_POST['palavra']);
    // Verificamos no banco de dados produtos equivalente a palavra digitada
    $conn = include_once(__DIR__ . '/connection.php');
    $sql ="SELECT * FROM produtos WHERE nomeProduto LIKE '%".$palavra."%'";
    $result = $conn->query($sql);
    $resultado = $result->fetch_array(MYSQLI_ASSOC);
    // Descobrimos o total de registros encontrados
    
    // Se houver pelo menos um registro, exibe-o
    if (isset($resultado)) {
        $idProduto = $resultado['idProduto'];
        $id = (int)$idProduto;
        header("location: ../product-single.php?id=$id");
    }        
    // Se não houver registros
     else {        
        echo"<script language='javascript' type='text/javascript'>
        alert('Produto não encontrado, consulte nossa pagina de produtos e encontre sua procura');window.location
        .href='../product.php?categoria=todos';</script>";
        die();
        
    }
}
}
function logout()
    {
        unset($_SESSION['login']);
        unset($_SESSION['permission']);
        header("Location: ../login.php");
        exit;
    }

