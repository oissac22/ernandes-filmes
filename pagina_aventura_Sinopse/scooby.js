var imgAtual = "../imagem_anime/scooby.jpg";
var imgAnterior = "../imagem_anime/scooby-doo_500.jpg";

function trailerscooby(){
    document.getElementById("scooby").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}