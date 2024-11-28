// Obtém os elementos dos modais pelo ID
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// Evento de click na tela, fora do modal
window.onclick = function(event) {

  // Se o objeto do evento for o modal (id01)
  if (event.target == modal) {

    // Esconde o modal (fecha o aviso)
    modal.style.display = "none";
  }
}

// Função para abrir e fechar o aviso
function some(x){
  // Esconde o modal com id 'id01' (fecha o primeiro modal)
  document.getElementById('id01').style.display='none';

  // Obtém o modal com id 'id02' (o segundo modal)
  var modal2 = document.getElementById('id02');
  
  // Se o parâmetro 'x' for 0, abre o segundo modal
  if (x == 0){
    modal2.style.display = 'block'; // Exibe o segundo modal
  }
}