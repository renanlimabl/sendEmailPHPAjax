<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Felippe</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <section class="main">
    <div class="container">
      <div class="logo">
        <img src="./assets/logo.png" alt="Logo">
      </div>
      <div class="flex">
        <div class="form">
          <h3>
            <span class="success">DESPERTE SEU PROPÓSITO</span> PARA TRANSFORMAR SUA VIDA, CARREIRA E EMPRESA 
            PARA TER A VIDA QUE VOCÊ SEMPRE DESEJOU!</h3>
            <p>Um curso de aperfeiçoamento profissional pago que estará disponível 
            <b>GRATUITAMENTE</b> ao vivo na internet nos dias:</p>
          <div class="date">
            <img src="./assets/calendario.png" alt="calendario">
            <div>
              <p>2, 3, 4 e 5 de Março às 20h</p>
              <span>AO VIVO e SEM REPLAY</span>
            </div>
          </div>
          <div class="email">
            <h4>Deixe o seu e-mail abaixo para receber GRATUITAMENTE o link das 4 AULAS AO VIVO e o material do curso.</h4>
            <div class="regressive">
              <div class="hours">
                <p>00</p>
                <span>horas</span>
              </div>
              <div class="minutes">
                <p>00</p>
                <span>minutos</span>
              </div>
              <div class="seconds">
                <p>00</p>
                <span>segundos</span>
              </div>
            </div>
            <form method="POST" action="sendmail.php" id="form">
              <input type="email" name="email" placeholder="E-mail">
              <input type="text" name="nome" placeholder="Nome">
              <input type="text" name="telefone" placeholder="Telefone">
              <input id="button" type="submit" name="send" value="GARANTIR MINHA VAGA!"/>
            </form>
          </div>
        </div>
        <div class="space"></div>
    </div>
    </div>
  </section>
  <section class="aulas">
    <div class="container">
      <div class="aula">
        <div class="aula-item">
          <img src="./assets/aula01.jpeg" alt="Aula 01">
          <h2>A GRANDE DESCOBERTA</h2>
          <p>Você descobrirá de onde vem esse conhecimento, qual é o embasamento científico 
            e terá acesso a explicação 
            completa de como o formato do corpo revela que tipo de mente uma pessoa tem.</p>
        </div>
        <div class="aula-item">
          <img src="./assets/aula02.jpeg" alt="Aula 02">
          <h2>A GRANDE DESCOBERTA</h2>
          <p>Você descobrirá de onde vem esse conhecimento, qual é o embasamento científico 
            e terá acesso a explicação 
            completa de como o formato do corpo revela que tipo de mente uma pessoa tem.</p>
        </div>
      </div>
      <div class="aula">
        <div class="aula-item">
          <img src="./assets/aula03.jpeg" alt="Aula 03">
          <h2>A GRANDE DESCOBERTA</h2>
          <p>Você descobrirá de onde vem esse conhecimento, qual é o embasamento científico 
            e terá acesso a explicação 
            completa de como o formato do corpo revela que tipo de mente uma pessoa tem.</p>
        </div>
        <div class="aula-item">
          <img src="./assets/aula04.jpeg" alt="Aula 04">
          <h2>A GRANDE DESCOBERTA</h2>
          <p>Você descobrirá de onde vem esse conhecimento, qual é o embasamento científico 
            e terá acesso a explicação 
            completa de como o formato do corpo revela que tipo de mente uma pessoa tem.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="professor">
    <div class="quem">
      <h1>Quem ira guiar vocês? <img src="./assets/logo.png"/></h1>
    </div>
    <div class="felippe">
      <img src="./assets/felippe.png" alt="Professor">
      <div class="description">
        <p>Especialista em Comunicação, fundador da Escola Brasileira de Comunicação e criador do Método Comunicativo Humanês. Ele é o responsável por trazer simplicidade, 
          clareza e aplicabilidade para a explicação da Maratona Sucesso Depois dos 30.</p>
        <h2>Fellippe Cineli</h2>
      </div>
    </div>
  </section>



  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="./sendmail.js"></script>
</body>
</html>