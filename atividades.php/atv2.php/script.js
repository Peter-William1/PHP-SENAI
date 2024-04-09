document.getElementById('botao').addEventListener('click', function() {
    var textoAnimado = document.getElementById('textoAnimado');
    
    // Adiciona a classe 'aparecer' para exibir o texto com a animação
    textoAnimado.classList.add('aparecer');
    
    // Define o tempo para remover a classe 'aparecer' após a animação
    setTimeout(function() {
      textoAnimado.classList.remove('aparecer');
    }, 1000); // Ajuste o tempo conforme necessário
});