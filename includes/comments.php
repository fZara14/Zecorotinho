<?php

$registros = readComments($id);

foreach ($registros as $registro) {
    $img = rand(1,4);
    $html .= "<div class='review'>
        <div class='user-img' style='background-image: url(images/person_{$img}.jpg)'></div>
										<div class='desc'>
											<h4>
												<span class='text-left'>". $_SESSION['nome'] ."</span>
												<span class='text-right'>{$registro['data']}</span>
											</h4>
												<span class='text-right'><a href='#' class='reply'><i class='icon-reply'></i></a></span>
                                            </p>
                                            <p>{$registro['comentario']}</p>
                                            <button name='excluirComentario' type='submit' class='btn btn-primary' value='{$registro['idComentario']}'>Deletar</button>
                                        </div>             
        </div>";
}