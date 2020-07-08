<?php

include_once(__DIR__ . '/crud.php');

$registros = readCart();

$total = 0;

$html = "";

foreach ($registros as $registro) {
    $total +=  $registro['preco'];
    $html .= "<tr class='alert' role='alert'>
    <td>
        <label class='checkbox-wrap checkbox-primary'>
            <input type='checkbox' checked>
            <span class='checkmark'></span>
        </label>
    </td>
    <td>
        <div class='img' style='background-image: url({$registro['url']});'></div>
    </td>
    <td>
        <div class='email'>
            <span>{$registro['nomeProduto']}</span>
            <span>{$registro['descricao']}</span>
        </div>
    </td>
    <td>R$ {$registro['preco']}</td>
    <td>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'><i class='fa fa-close'></i></span>
        </button>
    </td>
    </tr>";
}
echo $html;
