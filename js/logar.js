// Adiciona eventos para mostrar e ocultar a senha quando o ícone do olho é pressionado
document.getElementById('olho').addEventListener('mousedown', function () {
    document.getElementById('inSenha').type = 'text';
});

document.getElementById('olho').addEventListener('mouseup', function () {
    document.getElementById('inSenha').type = 'password';
});