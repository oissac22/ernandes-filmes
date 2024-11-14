var imgAtual = "../imagem_anime/maxresdefault.jpg";
var imgAnterior = "../imagem_anime/as_branquelas_500.jpg";

function trailerbranquelas(){
    document.getElementById("branquelas").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}