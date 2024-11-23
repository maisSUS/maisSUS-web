<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Definição da codificação de caracteres e escala inicial -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Título da página e ícone na barra de título -->
  <title>Página Principal</title>
  <link rel="icon" href="img/serra.png">
  <!-- Referências aos arquivos de estilos CSS -->
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/pagPrincipal.css">
  <!-- Bibliotecas de ícones -->
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
  <link rel="stylesheet" href="https://kit.fontawesome.com/367278d2a4.css" crossorigin="anonymous"> 
</head>

<body>
    <?php
        include 'header.php';
    ?>
  <!-- Corpo da página -->
  <div class="body">


    <!-- Container principal -->
    <div class="container">
      <!-- Primeira coluna de links -->
      <div>
        <!-- Link para agenda de consulta -->
        <a href="agendaConsulta.php" class="direcionamento">
          <i class='bx bx-calendar-event' alt=""></i>
          <p class="pclass">Agendar Consultas</p>
        </a>

        <!-- Link para agenda de exame -->
        <a href="agendaExame.php" class="direcionamento">
          <i class='bx bx-calendar-event' alt=""></i>
          <p>Agendar Exames</p>
        </a>

        <!-- Link para meus agendamentos -->
        <a href="meusAgendamentos.php" class="direcionamento">
          <i class='bx bx-calendar-check' alt=""></i>
          <p>Meus Agendamentos</p>
        </a>
      </div>

      <!-- Segunda coluna de links -->
      <div>
        <!-- Link para vacinas -->
        <a href="vacinas.php" class="direcionamento">
          <i class='bx bx-injection' alt=""></i>
          <p>Vacinas</p>
        </a>

        <!-- Link para unidades de saúde -->
        <a href="ubs.php" class="direcionamento">
          <i class="fa-regular fa-hospital" alt=""></i>
          <p>Unidades de Saúde</p>
        </a>
      </div>
    </div>
    <!-- Rodapé da página -->
    <footer>
      <p>Todos os direitos reservados &copy</p>
    </footer>
  </div>

</body>

</html>