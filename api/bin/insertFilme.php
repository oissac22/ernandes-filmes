<?php

require_once __DIR__ . "/conexao.php";

function insertFilmes($titulo, $ano, $genero, $url){
    $query="INSERT INTO `filmes` (titulo, ano, genero, url) VALUES (:titulo, :ano, :genero, :url)"; 
    $conn= conexao();
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":ano", $ano);
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":url", $url);
    return $stmt->execute();
}