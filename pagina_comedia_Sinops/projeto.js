var imgAtual = "../imagem_anime/anao.jpg";
var imgAnterior = "../imagem_anime/imagem_geral/projeto_x_500.jpg";

function trailerprojeto(){
    document.getElementById("projeto").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}