$(document).ready(function(){
  // Quando o documento estiver pronto, o código será executado.

  // Reseta o tamanho da fonte para o tamanho original
  var originalFontSize = $('html').css('font-size');  // Armazena o tamanho original da fonte do HTML
  $(".resetFont").click(function(){
  $('html').css('font-size', originalFontSize); // Restaura o tamanho da fonte para o valor inicial
  });

  // Aumenta o tamanho da fonte
  $(".increaseFont").click(function(){
    var currentFontSize = $('html').css('font-size'); // Obtém o tamanho atual da fonte
    var currentFontSizeNum = parseFloat(currentFontSize, 10); // Converte o tamanho da fonte para número
    var newFontSize = currentFontSizeNum*1.2; // Calcula o novo tamanho (20% maior)
    $('html').css('font-size', newFontSize); // Aplica o novo tamanho da fonte ao HTML
    return false; // Previne o comportamento padrão do evento de clique
  });

  // Diminui o tamanho da fonte
  $(".decreaseFont").click(function(){
    var currentFontSize = $('html').css('font-size'); // Obtém o tamanho atual da fonte
    var currentFontSizeNum = parseFloat(currentFontSize, 10); // Converte o tamanho da fonte para número
    var newFontSize = currentFontSizeNum*0.8; // Calcula o novo tamanho (20% menor)
    $('html').css('font-size', newFontSize); // Aplica o novo tamanho da fonte ao HTML
    return false; // Previne o comportamento padrão do evento de clique
  });

  // Ativa/desativa o modo com fundo amarelo
  $(document).ready(function(){
    $(".yellowBg").click(function(){
        $('body').toggleClass('yellowMode'); // Alterna a classe 'yellowMode' no elemento <body>
    });
  });
  
  // Ativa/desativa o modo com fundo preto
  $(document).ready(function(){
    $(".blackBg").click(function(){
      $('body').toggleClass('blackMode'); // Alterna a classe 'blackMode' no elemento <body>
    });
  });

  // Ativa/desativa o modo para dislexia
  $(document).ready(function(){
      $(".dislexia").click(function(){
        $('body').toggleClass('dislexiaMode'); // Alterna a classe 'dislexiaMode' no elemento <body>
      });
    });
});  