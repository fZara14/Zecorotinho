<?php

$senha = "abcxyz";

$senhaMd5 = md5($senha);
$senhaSh = sha1($senha);
$senhaSegura = password_hash($senha,PASSWORD_DEFAULT);

var_dump($senhaMd5);
var_dump($senhaSh);
var_dump($senhaSegura);
var_dump(password_verify($senha , $senhaSegura));