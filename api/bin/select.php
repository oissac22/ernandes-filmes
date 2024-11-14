<?php

require_once __DIR__ . "/conexao.php";

function selectFilmes(){
    $query="SELECT * FROM `filmes` order by titulo"; 
    $conn= conexao();
    $stmt= $conn->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}