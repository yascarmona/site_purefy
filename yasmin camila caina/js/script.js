Document.getElementById('box').addEventListener('submit', function (e) {
    var nome = document.getElementById('nome').value;
    var fone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;

    if (!/^\d+$/.test(telefone)) {
        alert("Por favor, insira apenas números no campo de telefone.");
        e.preventDefault(); 
        return;
    }

    if (email.indexOf('@') === -1) {
        alert("Por favor, insira um endereço de email válido.");
        e.preventDefault(); 
        return;
    }

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }
});

