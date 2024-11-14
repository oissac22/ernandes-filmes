<?php

require_once __DIR__ . "/conexao.php";

function deleteFilme($id) {
    try{
    $query="DELETE from `filmes`  WHERE id=:id"; 
    $conn= conexao();
    $stmt= $conn->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    return $stmt->execute();
    
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    return false;

    }
}