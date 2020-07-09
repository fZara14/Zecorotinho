<?php

$id = $_GET['id'];
include_once(__DIR__ . '/crud.php');

$registros = displayProduct($id);
extract($registros[0]);

$html = "
<section class='ftco-section'>
		<div class='container'>
			<div class='row'>
<div class='col-lg-6 mb-5 ftco-animate'>
    <a href='{$url}' class='image-popup prod-img-bg'><img src='{$url}' class='img-fluid' alt='Colorlib Template'></a>
</div>
<div class='col-lg-6 product-details pl-md-5 ftco-animate'>
    <h3>{$nomeProduto}</h3>
    <p class='price'><span>R$ {$preco}</span></p>
    <p>{$descricao}</p>
    <div class='row mt-4'>
        <div class='input-group col-md-6 d-flex mb-3'>
            <span class='input-group-btn mr-2'>
                <button type='button' class='quantity-left-minus btn' data-type='minus' data-field=''>
                    <i class='fa fa-minus'></i>
                </button>
            </span>
            <input type='text' id='quantity' name='quantity' class='quantity form-control input-number' value='1' min='1' max='100'>
            <span class='input-group-btn ml-2'>
                <button type='button' class='quantity-right-plus btn' data-type='plus' data-field=''>
                    <i class='fa fa-plus'></i>
                </button>
            </span>
        </div>
        <div class='w-100'></div>
    </div>
    <form action='./includes/controller.php?id={$id}' method='post'>
    <input name='addToCart' type='submit' class='btn btn-primary py-3 px-5 mr-2' value='Adicionar ao carrinho'>
    </form>
</div>
</div>
			<div class='row mt-5'>
				<div class='col-md-12 nav-link-wrap'>
					<div class='nav nav-pills d-flex text-center' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
						<a class='nav-link ftco-animate active mr-lg-1' id='v-pills-1-tab' data-toggle='pill' href='#v-pills-1' role='tab' aria-controls='v-pills-1' aria-selected='true'>Descrição</a>
						<a class='nav-link ftco-animate' id='v-pills-2-tab' data-toggle='pill' href='#v-pills-2' role='tab' aria-controls='v-pills-2' aria-selected='false'>Avaliações</a>

					</div>
				</div>
				<div class='col-md-12 tab-wrap'>

					<div class='tab-content bg-light' id='v-pills-tabContent'>

						<div class='tab-pane fade show active' id='v-pills-1' role='tabpanel' aria-labelledby='day-1-tab'>
							<div class='p-4'>
								<h3 class='mb-4'>{$nomeProduto}</h3>
								<p>{$descricao}</p>
							</div>
                        </div>
                        
                        <div class='tab-pane fade' id='v-pills-2' role='tabpanel' aria-labelledby='v-pills-day-2-tab'>

                        <form action='./includes/controller.php?id={$id}' method='post'>
              	<div class='row p-4'>
						   		<div class='col-md-12'>
                        ";

include_once(__DIR__ . '/comments.php');

echo $html;
