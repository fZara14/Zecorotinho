<?php

$server     = '179.191.67.2:50264';
$user       = 'root';
$password   = 'root';
$bd         = 'ZeCorotinho';

$conn = new mysqli($server, $user, $password, $bd);

return $conn;