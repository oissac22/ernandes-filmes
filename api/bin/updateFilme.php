<?php

require_once __DIR__ . "/conexao.php";

function updateFilme($id, $titulo, $ano, $genero, $url){
    $query="UPDATE `filmes` SET titulo=:titulo, ano=:ano, genero=:genero, url=:url WHERE id=:id"; 
    $conn= conexao();
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":ano", $ano);
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":url", $url);
    return $stmt->execute();
}