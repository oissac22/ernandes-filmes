var imgAtual = "../imagem_anime/freddy.jpg";
var imgAnterior = "../imagem_anime/A_hora_do_Pesadelo_500.jpg";

function trailerfreddy(){
    document.getElementById("freddy").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}