<?php

$cat = $_GET['categoria'];
include_once(__DIR__ . '/crud.php');

$registros = selectProducts($cat);

$html = '';
foreach ($registros as $registro) {
    $html .= "<div class='col-md-4 d-flex'>
    <div class='product ftco-animate'>
        <div class='img d-flex align-items-center justify-content-center' style='background-image: url({$registro['url']});'>
            <div class='desc'>
                <p class='meta-prod d-flex'>
                    <a href='cart.php' class='d-flex align-items-center justify-content-center'><span class='flaticon-shopping-bag'></span></a>
                    <a href='product-single.php?id={$registro['idProduto']}' class='d-flex align-items-center justify-content-center'><span class='flaticon-visibility'></span></a>
                </p>
            </div>
        </div>
        <div class='text text-center'>
            <span class='category'>{$registro['categoria']}</span>
            <h2>{$registro['nomeProduto']}</h2>
            <p class='mb-0'><span class='price'>R$ {$registro['preco']} </span></p>
        </div>
    </div>
</div>";
}
echo $html;