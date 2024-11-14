var imgAtual = "../imagem_anime/yournamedois.jpg";
var imgAnterior = "../imagem_anime/your_name imagem_500.jpg";

function traileryour(){
    document.getElementById("your").src = imgAtual;
    let aux = imgAtual;
    imgAtual = imgAnterior;
    imgAnterior = aux;
}