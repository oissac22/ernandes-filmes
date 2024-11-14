<?php

require_once "./bin/select.php";

$filmes= selectFilmes();
$json= json_encode($filmes);
echo $json;