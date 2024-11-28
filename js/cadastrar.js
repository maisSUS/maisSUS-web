const telefoneInput = document.getElementById('inTel');

telefoneInput.addEventListener('input', function (e) {
    let valor = e.target.value;

    // Remove todos os caracteres não numéricos
    valor = valor.replace(/\D/g, '');

    // Adiciona a formatação passo a passo
    if (valor.length > 0) {
        valor = '(' + valor;
    }
    if (valor.length > 3) {
        valor = valor.slice(0, 3) + ') ' + valor.slice(3);
    }
    if (valor.length > 10) {
        valor = valor.slice(0, 10) + '-' + valor.slice(10);
    }

    // Limita o valor ao tamanho máximo permitido (15 caracteres formatados)
    valor = valor.slice(0, 15);

    // Atualiza o campo com o valor formatado
    e.target.value = valor;
});

const cpfInput = document.getElementById('inCpf');
cpfInput.addEventListener('input', function (e) {
    let valor = e.target.value;
    valor = valor.replace(/\D/g, '');
    if (valor.length > 3){
        valor = valor.slice(0,3) + '.' + valor.slice(3);
    }
    if (valor.length > 7){
        valor = valor.slice(0,7) + '.' + valor.slice(7);
    }
    if (valor.length > 11){
        valor = valor.slice(0,11) + '-' + valor.slice(11);
    }

    valor = valor.slice(0,14);
    e.target.value = valor;
})