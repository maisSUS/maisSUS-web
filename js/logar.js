var inNome = document.getElementById("inID");
var inSobrenome = document.getElementById("inSenha");
var btEntrar = document.getElementById("btEntrar");

function entrar() {
    var id = inNome.value;
    var senha = inSobrenome.value;
    
    if (inNome.value == "") {
        alert("O campo 'CPF ou Cartão do SUS' não foi preenchido!");
        inNome.focus();
    }else{
        if(inSobrenome.value == "") {
            alert("O campo 'Senha' não foi preenchido!");
            inSobrenome.focus();
        }else{
            if (inNome.value != "chicoin" || inSobrenome.value != "eutentei"){
                alert("Usuário ou Senha foram digitados errado!")
            }else{
                window.location.href = "pagPrincipal.html";
            }
        }
    }

}

btEntrar.addEventListener("click", entrar);
document.addEventListener('keypress', function(event) {
    if (event.key == 'Enter') {
      entrar();
    }
});

//olho de ver senha
document.getElementById('olho').addEventListener('mousedown', function() {
    document.getElementById('inSenha').type = 'text';
});

document.getElementById('olho').addEventListener('mouseup', function() {
document.getElementById('inSenha').type = 'password';
});

// Para que o password não fique exposto apos mover a imagem.
// document.getElementById('olho').addEventListener('mousemove', function() {
// document.getElementById('inSenha').type = 'password';
// });