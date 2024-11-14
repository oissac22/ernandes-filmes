<?php

require_once __DIR__ . "/conexao.php";

function selectOneFilme($id){
    $query="SELECT * FROM `filmes` WHERE id=:id"; 
    $conn= conexao();
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}