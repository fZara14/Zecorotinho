<?php

$server     = 'localhost';
$user       = 'root';
$password   = '';
$bd         = 'ZeCorotinho';

$conn = new mysqli($server, $user, $password, $bd);

return $conn;