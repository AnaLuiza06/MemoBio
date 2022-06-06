<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MemoBio</title>
    <link rel="stylesheet" type="text/css" href="./cods/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Prompt:wght@100;200&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <header>
      <div>
        <img src="./imgs/logo.png" />
        <nav>
          <ul>
            <li><a href="#principaisAssuntos">Principais Assuntos</a></li>
            <li><a href="#sobreOMemo">Sobre o Memo</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
          </ul>
        </nav>
      </div>
      <button><a href="./cods/pagCadastro.php">Entrar</a></button>
    </header>

    <main>
      <section id="inicio">
        <div>
          <img src="./imgs/Astronaut-bro.svg" />
        </div>
        <div class="text">
          <h2>Aprenda os conceitos de Biologia de uma vez por todas!</h2>
          <h1>Embarque nessa viagem com agente!!!</h1>

          <button><a href="#">Cadastre-se</a></button>
        </div>
          
      </section>

      <section id="sobreOMemo">
        <div>
          <h1>O que é o Memo?</h1>
          <p>
            O MemoBio é uma plataforma para quem deseja memorizar melhor os
            conteúdos relacionados a matéria de biologia. Tendo como metodo
            principal o Flashcars, com várias perguntas relacionadas as
            principais áreas das Ciências Biológicas.
          </p>
          <p>
            A maioria das perguntas é retirada de provas de vestibulares bem
            famosos, como UNICAMP, UFRJ, UFPE e até o próprio ENEM, sendo uma
            ótima escolha para quem está estudando com intuito de entrar em uma
            faculdade.
          </p>
        </div>
        <div class="container">
          <div class="cardContainer">
            <div class="sombra"></div>
            <div class="card">
              <h2>+ de 90 questões</h2>
              <p>
                Um longo banco de questões tratando sobre as principais áreas da
                biologia.
              </p>
            </div>
          </div>
          <div class="cardContainer">
            <div class="sombra"></div>
            <div class="card">
              <h2>Tenha Feedback</h2>
              <p>
                Tenha feedback de sobre os seus erros e acertos em cada tópico
                da disciplina.
              </p>
            </div>
          </div>
          <div class="cardContainer">
            <div class="sombra"></div>
            <div class="card">
              <h2>Desempenho na plataforma</h2>
              <p>
                Número de perguntas respondidas, número de erros, número de acertos, e muito mais.
              </p>
            </div>
          </div>
        </div>
        
      </section>

      <section id="principaisAssuntos">
        <h2 class="titulos">Principais Assuntos</h2>
        <h1>Veja o Nosso roteiro para esta grande viagem</h1>
        <div class="assuntos">

          <?php
            include ('./cods/conexao.php');

            $result = mysqli_query($conn, 'select * from tb_assuntosMain');
            $consulta = mysqli_fetch_all($result, MYSQLI_ASSOC);
            //$consulta = $conn->query();
          ?>
          <?php foreach ($consulta as $ans): ?>
              <div class='assuntosItem'>
                <div class='sombra'></div>
                  <div>
                    <h2>
                      <?php echo $ans['nome'];?></h2>
                    <p><?php echo $ans['txtDescritivo'];?></p>
                    <?php echo $ans['icon'];?>
                  </div>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
        </div>
      </section>

      <section id="depoimentos">
        <h2 class="titulos">Depoimentos</h2>
        <h1>Veja o que os Depoimentos de outros Tripulantes</h1>
          <section class="testeDepoimentos">
            <button class="anterior">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left btnAnt" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </button>

            <section class="testeCarrosel"></section>

            <button class="proximo">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right btnAnt" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </button>
          </section>
       
      </section>    

    </main>

    <footer>
      <div class="footer">
        
        <div>
        <img src="">
        <p>O MemoBio é uma plataforma de Biologia, com centenas de perguntas sobre os assuntos mais abordados nos principais vestibulares.</p>
      </div>

      <div>
        <ul>
          <li>Instragran</li>
          <li>E-mail</li>
          <li>Telefone</li>
        </ul>
      </div>

      </div>     
    </footer>

    <script src="./cods/jsCarrosel.js"></script>
  </body>
</html>
