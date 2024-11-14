var imgAtual = "../imagem_anime/bruce.jpg";
var imgAnterior = "../imagem_anime/batmam_500.jpg";

function trailerbat(){
    document.getElementById("bat").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}