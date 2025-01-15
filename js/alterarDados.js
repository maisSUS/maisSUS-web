document.getElementById('altDados').addEventListener('click', function() {
    // Prompt para alterar email e telefone
    let novoEmail = prompt("Digite o novo E-mail:", document.getElementById('nav-txt').innerText);
    let novoTelefone = prompt("Digite o novo Telefone:", document.getElementById('nav-txt').innerText);

    // Se ambos os campos forem preenchidos, submete o formulário para atualizar
    if (novoEmail && novoTelefone) {
        let form = document.createElement("form");
        form.method = "POST";
        form.action = window.location.href;  // Envia para a mesma página

        let emailField = document.createElement("input");
        emailField.type = "hidden";
        emailField.name = "email";
        emailField.value = novoEmail;
        form.appendChild(emailField);

        let telefoneField = document.createElement("input");
        telefoneField.type = "hidden";
        telefoneField.name = "telefone";
        telefoneField.value = novoTelefone;
        form.appendChild(telefoneField);

        document.body.appendChild(form);
        form.submit();
    } else {
        alert("Por favor, preencha ambos os campos.");
    }
});
