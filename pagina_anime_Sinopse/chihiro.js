var imgAtual = "../imagem_anime/chihiro.jpg";
var imgAnterior = "../imagem_anime/aviagem_chihiro_500.jpg";

function trailerchi(){
    document.getElementById("chihiro").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}