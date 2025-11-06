<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compartilhe sua opinião | EcoGestor</title>
    <link rel="icon" href="../Imagens/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../style.css" />

    <style>
      p {
        font-size: 1.2em;
        text-align: justify;
      }
      #format {
        margin: 50px auto;
        max-width: 80%;
      }
    </style>

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
          <div id="format">
          <?php

          $con = mysqli_connect("localhost","root","","ecogestor");
          if (mysqli_connect_errno()) {
              echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
          }

          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $experiencia = $_POST["experiencia"];
          $facilidade = $_POST["facilidade"];
          $secoes = $_POST["secoes"];
                    if (is_array($secoes)) {
                     $secoes = implode(", ", $secoes);
                    }
          $erro = $_POST["erro"];
          $problema = $_POST["problema"] ?? ""; 
          $design = $_POST["design"];
          $feedback = $_POST["feedback"];
          $recomendacao = $_POST["recomendacao"];

          $sql = "SELECT * FROM feedback";
          $result = mysqli_query($con, $sql);

          $sql = "INSERT INTO feedback VALUES ('$nome', '$email', '$experiencia', '$facilidade', '$secoes', '$erro', '$problema', '$design', '$feedback', '$recomendacao')";
          if (!mysqli_query($con, $sql)) {
              die('Erro: ' . mysqli_error($con));
          }
          
          mysqli_close($con);

            echo "<p>
                      Que bom ter você com a gente, <strong>$nome</strong>! Obrigado por compartilhar seu feedback.
                      Ele nos mostra o que estamos fazendo bem e onde ainda podemos melhorar.
                      Sua contribuição faz toda a diferença na construção de algo realmente incrível!
                  </p>";
            ?>
        </div>  
          
    </main>

    <footer>
      <p>© 2025 EcoGestor | Projeto IFMG - Campus Ponte Nova</p>
    </footer>
  </body>
</html>
