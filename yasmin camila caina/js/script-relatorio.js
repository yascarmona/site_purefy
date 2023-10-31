function mostrarTabela(obj) {
    var el = document.getElementById('spoiler');
        if ( el.style.display == 'none' ) {
           /* se conteúdo está escondido, mostra e troca o valor do botão para: escondeOcultar */ 
           el.style.display = 'block';
           document.getElementById("consultar").value='Ocultar'
        } else {
           /* se conteúdo está a mostra, esconde o conteúdo e troca o valor do botão para: mostraConsultar */ 
           el.style.display = 'none' 
           document.getElementById("consultar").value='Consultar' 
        }
}