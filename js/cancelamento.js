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

document.getElementById('cancelbtn').addEventListener('click', function () {
  const itemId = this.getAttribute('data-id'); // Obtém o ID do item
  excluirItem(itemId); // Chama a função para excluir
});


// Função para excluir o item no backend
function excluirItem(id) {
  console.log('ID enviado para exclusão:', id); // Log do ID no console
  fetch('config.php', { // Caminho do arquivo PHP
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify({ id: id }), // Envia o ID no corpo da requisição
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          alert('Item excluído com sucesso!');
          location.reload(); // Recarrega a página para atualizar a lista
      } else {
          alert('Erro ao excluir o item: ' + data.message);
      }
  })
  .catch(error => {
      console.error('Erro:', error);
      alert('Erro no servidor.');
  });
}
