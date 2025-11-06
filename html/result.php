<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compartilhe sua opinião | EcoGestor</title>
    <link rel="icon" href="../Imagens/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <header>
      <a href="index.html">
        <img
          src="../Imagens/logoEco.png"
          alt="Ecogestor"
          height="25%"
          width="25%"
        />
      </a>
      <nav>
        <a class="bordadir" href="noticias.html" title="Página Inicial"
          >Noticias</a
        >
        <a class="bordadir" href="App.html" title="Nosso App">Nosso App</a>
        <a class="bordadir" href="Sobre.html" title="Nosso App"
          >Sobre o projeto</a
        >
        <a href="Contato.html" title="Nosso App">Nossa equipe</a>
      </nav>
    </header>

   <main>
        <h1 id="form-title">Obrigado Pelo Seu Feedback</h1>

        <?php
          $nome = $_GET["nome"];
          $problema = $_GET["problema"];
          $feedback = $_GET["feedback"];

          echo "<p>É um prazer te conhecer <strong>$nome</strong>! Agradecemos pelo seu feedback.</p>";

          if (!empty($problema)) {
              echo "<p>Você mencionou o seguinte problema: <em>$problema</em></p>";
          } else {
              echo "<p>Você não mencionou nenhum problema.</p>";
          }

          if (!empty($feedback)) {
              echo "<p>Seu feedback sobre melhorias: <em>$feedback</em></p>";
          } else {
              echo "<p>Você não forneceu sugestões de melhoria.</p>";
          }
          ?>
          
    </main>

    <footer>
      <p>© 2025 EcoGestor | Projeto IFMG - Campus Ponte Nova</p>
    </footer>
  </body>
</html>
