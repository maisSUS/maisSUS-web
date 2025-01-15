document.getElementById('excluirDados').addEventListener('click', function() {
    // Exibe um prompt de confirmação para a exclusão da conta
    const confirmacao = confirm("Tem certeza de que deseja excluir sua conta? Esta ação não pode ser desfeita.");

    if (confirmacao) {
        // Se confirmado, cria um formulário e envia um POST para excluir os dados
        let form = document.createElement("form");
        form.method = "POST";
        form.action = window.location.href;  // Envia para a mesma página

        let excluirInput = document.createElement("input");
        excluirInput.type = "hidden";
        excluirInput.name = "excluir";
        excluirInput.value = "sim";  // Pode ser qualquer valor, só precisa ser setado para identificar a ação
        form.appendChild(excluirInput);

        document.body.appendChild(form);
        form.submit();
    } else {
        alert("A exclusão foi cancelada.");
    }
});
