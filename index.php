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
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>
<body>
  <section class="main">
    <div class="container">
      <div id="pull"></div>  
      <div class="flex">
        <div class="form">
          <h3>
            <b class="success">DESPERTE SEU PROPÓSITO</b> E TRANSFORME SUA VIDA, CARREIRA E EMPRESA 
            PARA TER A VIDA QUE VOCÊ SEMPRE DESEJOU!</h3>
            <p>Uma jornada de aperfeiçoamento profissional paga que estará disponível 
            <b>GRATUITAMENTE</b> ao vivo e online na internet nos dias:</p>
          <div class="date">
            <img src="./assets/calendario.png" alt="calendario">
            <div>
              <p>2, 3, 4 e 5 de Março às 20h</p>
              <span>AO VIVO e SEM REPLAY</span>
            </div>
          </div>
          <div class="email">
            <h4>Deixe o seu contato abaixo para receber GRATUITAMENTE o link das 4 AULAS AO VIVO e o material da MASTER CLASS no WhatsApp.</h4>
            <div class="regressive">
              <div class="hours">
                <p>00</p>
                <span>horas</span>
              </div>
              <div class="minutes">
                <p id="min">00</p>
                <span>minutos</span>
              </div>
              <div class="seconds">
                <p id="sec">00</p>
                <span>segundos</span>
              </div>
            </div>
            <form method="POST" action="sendmail.php" id="form">
              <input type="text" name="nome" placeholder="Nome" required>
              <input type="text" name="telefone" placeholder="Telefone" required>
              <input type="email" name="email" placeholder="E-mail" required>
              <input id="button" type="submit" name="send" value="ENTRAR NO GRUPO VIP DO WHATSAPP!"/>
            </form>
          </div>
        </div>        
    </div>
    </div>
  </section>
  <section class="aulas">
    <header>
      <h1>MASTER CLASS JORNADA DO PROPÓSITO E AUTORREALIZAÇÃO</h1>
      <p>Para quem busca ter mais liberdade fazendo o que você faz alinhado com o que você é!</p>
      <p>Se você quer ter uma Vida com mais Sentido e um Trabalho com mais Significado</p>
      <p>essa Jornada foi feita especialmente para você!</p>
      <br />
      <p><i>Aguardo você para iniciarmos a melhor viagem da sua vida!</i></p>
      <br />
      <p><b>Felippe Cinelli</b></p>
      <br />
      
    </header>
    <div class="container">
      <div class="aula">
        <div class="aula-item">
          <img src="./assets/aula01.jpeg" alt="Aula 01">
          <h2>A GRANDE LIBERDADE</h2>
          <p>Você descobrirá porque esta parado tanto tempo no mesmo lugar! Será que você esta vivendo realmente o que você quer ou esta vivendo o que planejaram para você? 
            O que falta para ter a vida que sempre desejou?!</p>
        </div>
        <div class="aula-item">
          <img src="./assets/aula02.jpeg" alt="Aula 02">
          <h2>AUTORREALIZAÇÃO</h2>
          <p>Descubra como você pode acelerar sua jornada e o que está fazendo de errado, permitindo com que outras pessoas façam por você. O que está te impedindo de evoluir, 
            ganhar mais dinheiro e ter uma vida melhor?</p>
        </div>
      </div>
      <div class="aula">
        <div class="aula-item">
          <img src="./assets/aula03.jpeg" alt="Aula 03">          
          <h2>A TRANSFORMAÇÃO</h2>
          <p>Você vai desenvolver as habilidades que são realmente importantes e aprender como ter mais energia na vida e entusiasmo profissional, fazendo com que pessoas queiram te contratar, indicar e pagar cada vez mais!</p>          
        </div>
        <div class="aula-item">
          <img src="./assets/aula04.jpeg" alt="Aula 04">
          <h2>INTELIGÊNICA E PRÓPOSITO</h2>
          <p>A aula mais importante, onde você descobrirá o que de fato é essencial sobre esse conhecimento e vai ter uma explicação completa da mundança que o mundo está passando e qual a melhor direção para você.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="professor">
    <div class="quem">
      <!-- <h1>SEU MENTOR:</h1> -->
    </div>
    <div class="felippe">
      <h3>Quem vai ser seu mentor?</h3>
      <img src="./assets/felippe2.png" alt="Professor">
      <div class="description">
        <p><b>Treinador da Mente Humana e Arquiteto da Alma.</b> <br /> 
Professional Coaching, Mentoring e Advice Humanizado ISOR, em Self & Life com Ativação de Competências Pessoais e Profissionais pelo Instituto HOLLOS. É palestrante, treinador, especialista com MBA em Gestão de Negócios na FGV e Arquiteto e Urbanista há mais de 10 anos.</p>
        <h2>Felippe Cinelli</h2>
        <h3>Fundador | Facilitador</h3>
      </div>
    </div>
  </section>
  <footer>
    <img src="./assets/logo.png" alt="Logo">
    <p>© Arte de Acreditar - 2021 <br /> Todos os direitos reservados</p>
  </footer>



  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="./sendmail.js"></script>
  <script src="./regressive.js"></script>
</body>
</html>