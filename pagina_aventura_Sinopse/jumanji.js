var imgAtual = "../imagem_anime/20230111-ovicio-jumanji-1.jpg";
var imgAnterior = "../imagem_anime/jumanji_welcome_tu_the_jungle_500.jpg";

function trailerjumanji(){
    document.getElementById("jumanji").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}