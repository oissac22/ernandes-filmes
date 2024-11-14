var imgAtual = "../imagem_anime/massacre.jpg";
var imgAnterior = "../imagem_anime/Masacre_da_Serra_Eletrica_500.jpg";

function trailermassacre(){
    document.getElementById("massacre").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}