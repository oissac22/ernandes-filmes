<?php
//inclusao dos arquivos externos
require_once __DIR__ . "/api/bin/insertFilme.php";
require_once __DIR__ . "/api/bin/selectOneFilme.php";
require_once __DIR__ . "/api/bin/updateFilme.php";
require_once __DIR__ . "/api/bin/deleteFilme.php";
//inicialização das variáveis 
$id = "";
$titulo = "";
$ano = "";
$genero = "";
$url = "";
//tratamento do Formulário
//se o campo id  estar vazio, insertFilmes é chamado
if ( isset($_POST) && isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"];
    $url = $_POST["url"];
    if ($id) {
        updateFilme($id, $titulo, $ano, $genero, $url);
    } else {
        insertFilmes($titulo, $ano, $genero, $url);
    }
}
//se houver  uma requisição GET com o campo id, selectOneFilme. Esses dados
if (isset($_GET) && isset($_GET["id"])) {
    $filme = selectOneFilme($_GET["id"]);
    $id = $filme["id"];
    $titulo = $filme["titulo"];
    $ano = $filme["ano"];
    $genero = $filme["genero"];
    $url = $filme["url"];
}
//O HTML contém um formulário para inserir ou editar informações sobre o filme, incluindo campos para TÍTULO, ANO, GÊNERO e URL. 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo filme</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 30px;
        }
        form {
            width: 300px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input {
            padding: 10px;
        }
    </style>
</head>
<body>
    <p>
        <h1>Novo filme</h1>
    </p>
    <!-- o required o briga os preenchimentos dos campos  -->
    <form method="POST" action="novo.php<?= $id ? "?id=".$id : "" ?>">
        <input type="hidden" name="id" value="<?=$id ?>" />
        <input required placeholder="TÍTULO" autofocus name="titulo" value="<?=$titulo ?>" />
        <input required placeholder="ANO" type="number" name="ano" value="<?=$ano ?>" />
        <input required placeholder="GÊNERO" name="genero" value="<?=$genero ?>" />
        <input required placeholder="URL" name="url" value="<?=$url ?>" />
        <div>
            <!-- botões de ações -->
            <button type="submit">SALVAR</button>
            <a href="./"><button type="button" >Voltar</button></a>
            <?php
            //Este trecho de código PHP trata da funcionalidade de exclusão de um filme específico e é dividido em duas
            //Verificação e Exclusão do Filme
                if (isset($_GET) && isset($_GET["del"])) {
                    deleteFilme($_GET["del"]);
                    ?>
                    <script>
                        window.alert("Registro deletado com sucesso");
                        window.location.href = "./";
                    </script>
                    <?php
            //Exibição do Botão "Deletar" com Confirmação
                } else if (isset($_GET) && isset($_GET["id"])) {
                    ?>
                        <script>
                            function clickDelete() {
                                if (!window.confirm("Você quer realmente deletar este registro?")) return;
                                window.location.href = "?del=<?=$_GET["id"] ?>";
                            }
                        </script>
                        <!-- botão de ação -->
                        <button type="button" onclick="clickDelete()">Deletar</button>
                    <?php
                }
            ?>
        </div>
    </form>
</body>
</html>
