<?php

$server     = 'localhost';
$user       = 'root';
$password   = '';
$bd         = 'zecorotinho';

$conn = new mysqli($server, $user, $password, $bd);

return $conn;