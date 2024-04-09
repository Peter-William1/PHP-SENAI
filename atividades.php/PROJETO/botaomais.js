

function diminuirquantidade(indice) {
    var campoQuantidade = document.getElementById('quantidade' + indice);
    var valorAtual = parseInt(campoQuantidade.value);
    if (valorAtual > 1) {
        campoQuantidade.value = valorAtual - 1;
    }
   
}

function aumentarquantidade(indice) {
    var campoQuantidade = document.getElementById('quantidade' + indice);
    var valorAtual = parseInt(campoQuantidade.value);
    campoQuantidade.value = valorAtual + 1;
    
 
}

