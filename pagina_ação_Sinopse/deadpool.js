var imgAtual = "../imagem_anime/deadpool-e-wolverine-890x466.jpg";
var imgAnterior = "../imagem_anime/dead_pool_wolverien_500.jpg";

function trailerdead(){
    document.getElementById("dead").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}