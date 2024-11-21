// Obtenção dos elementos do formulário de login e do botão de entrar
var inNome = document.getElementById("inID");
var inSenha = document.getElementById("inSenha");
var btEntrar = document.getElementById("btEntrar");

// Função para realizar o login
function entrar() {
    // Obtenção dos valores dos campos de login
    var id = inNome.value;
    var senha = inSenha.value;
    window.location.href = "pagPrincipal.php";
    // Verificações de preenchimento dos campos
    /*if (inNome.value == "") {
        alert("O campo 'CPF ou Cartão do SUS' não foi preenchido!");
        inNome.focus();
    } else if (inSenha.value == "") {
        alert("O campo 'Senha' não foi preenchido!");
        inSenha.focus();
    } else {
        // Verificação de usuário e senha
        if (inNome.value != "ochicoin" || inSenha.value != "EuTentei") {
            alert("Usuário ou Senha foram digitados errado!")
        } else {
            // Redireciona para a página principal se os dados de login estiverem corretos
            window.location.href = "pagPrincipal.php";
        }
    }*/
}
// Adiciona o evento de clique ao botão de entrar
btEntrar.addEventListener("click", entrar);

// Adiciona o evento de tecla pressionada para a tecla "Enter" para chamar a função de login
document.addEventListener('keypress', function (event) {
    if (event.key == 'Enter') {
        entrar();
    }
});

// Adiciona eventos para mostrar e ocultar a senha quando o ícone do olho é pressionado
document.getElementById('olho').addEventListener('mousedown', function () {
    document.getElementById('inSenha').type = 'text';
});

document.getElementById('olho').addEventListener('mouseup', function () {
    document.getElementById('inSenha').type = 'password';
});
