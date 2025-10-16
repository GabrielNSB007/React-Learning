<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfólio</title>
    <style>
      :root{
          --main-color: rgb(231, 78, 31);
          --secondary-color: rgb(63, 56, 56);
          --background-color: rgb(240, 240, 240);
          --border-radius: 16px;
          --box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
          --font-type: Arial, Helvetica, sans-serif;
          
      }
      body{
          background-image: url("images/6325313.jpg");
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          min-height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          /* A linha abaixo é redundante com a anterior, mas mantida do original */
          min-height: 100vh; 
      }

      .infobox{
          width: 80vw;
          height: 80vh;
          display: flex;
          justify-content: space-evenly;
          align-items: center;
          background-color: white;
          border-radius: var(--border-radius);
          box-shadow: var(--box-shadow);
          
      }

      .space{
          width: 33vw;
          height: 100vh;
          padding: 20px;
          display: flex;
          justify-content: flex-start;
          align-items: stretch;
          align-self: flex-start;
          /*border-color:black;
          border-width: 4px;
          border-style: solid;*/
          flex-direction: column;
      }
      .box {
          
          width: 100%;
          background-color: var(--background-color);
          border-radius: var(--border-radius);
          padding: 20px;
          box-shadow: var(--box-shadow);
      }

      #topbox {
          height: 40%;
          top: 0;
          margin-top: 0;
          transform: scale(1);
          transition: transform 0.3s ease;
      }

      #bottombox {
          height: 23%;
          margin-bottom: auto;
          transform: scale(1);
          transition: transform 0.3s ease;
      }

      #topbox:hover, #bottombox:hover,.icon:hover {
          transform: scale(1.05);
          transition: transform 0.3s ease;
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
          cursor: pointer;
      }
      .chatterbox{
          width: 100%;
          height: auto;
          display: flex;
          justify-content:space-around;
          text-align: left;
          font-family: var(--font-type);
          color: var(--secondary-color);
          margin-bottom: 20px;
      }

      .qualifications{
          display: flex;
          justify-content: flex-start;
          align-items: center;
          width: 100%;
          height: 40px;
          gap: 10px; /* Adicionado um pequeno espaçamento entre as bolhas de qualificação */
      }
      .qualifications-bubbles{
          width: auto;
          height: 20px;
          border-radius: 16px;
          border-color: var(--main-color);
          border-style: solid;
          border-width: 2px;
          color: var(--main-color);
          padding: 10px;
      }

      .box{
          width: 90%;
          height: auto;
          font-family: var(--font-type);
          color: var(--secondary-color);
      }

      h1,h2,h3{
          color: var(--main-color);
          text-align: left;
      }

      #college-time{
          padding: 10px;
          color: var(--secondary-color);
          border-color: var(--secondary-color);
      }

      #college-name{
          font-style: italic;
      }

      #leftspace,#middlespace,#rightspace {
          gap: 20px;
          display: flex;
          flex-direction: column;
          align-items: stretch;
      }

      #qualifications-box{
          padding: 10px;
      }
      .myphoto{
          width: 100%;
          height: 100%;
          border-radius: var(--border-radius);
          box-shadow: var(--box-shadow);
      }

      #rightspace {
          height: 95%;
      }

      #rightspace .box {
          flex: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
      }

      #eu.myphoto {
          width: 80%;
          height: 80%;
          max-width: 600px;
          max-height: 600px;
          object-fit: cover;
      }

      .socials{
          width: 100%;
          height: 150px;
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      .icon{
          width: 80px;
          height: 80px;
          border-radius: 50%;
          transform: scale(1);
          transition: transform 0.3s ease;
      }

      #leftspace #topbox {
          height: 42%;
      }
    </style>
  </head>
  <body>
    <div class="infobox">
      <div class="space" id="leftspace">
        <div id="topbox" class="box">
          <h1>Olá! Bem vindo ao meu Portfólio</h1>
          <p>Meu nome é Gabriel Nóbrega</p>
          <div class="qualifications">
            <div class="qualifications-bubbles">Estudante</div>
            <div class="qualifications-bubbles">Desenvolvedor FullStack</div>
          </div>
          <?php echo '<p class="chatterbox">
            Sou um desenvolvedor de programas, estudante do Centro de Informática,
            apaixonado em criar aplicaçoes únicas através da utilizaçao de tecnologias
            como JavaScript, HTML e CSS.
          </p>'; ?>
          <?php echo '<p class="chatterbox">
            Gosto de programar e estou aprendendo React, uma biblioteca
            JavaScript para construir interfaces de usuário. Estou animado para
            criar aplicativos web interativos e dinâmicos com foco em estilizaçao
            e usabilidade. Acredito no Poder do trabalho em equipe e na
            colaboraçao para alcançar objetivos da melhor forma possivel.
          </p>'; ?>
        </div>

        <div id="bottombox" class="box">
          <h2>Educação Acadêmica</h2>
          <div class="qualifications">
            <div class="qualifications-bubbles" id="college-time">
              05/2025 - 11/2028
            </div>
          </div>
          <h3>Carreira Universitária</h3>
          <div id="college-name">Universidade Federal de Pernambuco|UFPE</div>
          <p>Sistemas de Informação</p>
        </div>
      </div>

      <div class="space" id="middlespace">
        <div id="topbox" class="box">
          <h2>Competências</h2>
          <div class="qualifications">
            <div class="qualifications-bubbles" id="college-time">Python</div>
            <div class="qualifications-bubbles" id="college-time">C++</div>
            <div class="qualifications-bubbles" id="college-time">JavaScript</div>
            <div class="qualifications-bubbles" id="college-time">HTML</div>
          </div>
          <div class="qualifications" id="qualifications-box">
            <div class="qualifications-bubbles" id="college-time">CSS</div>
            <div class="qualifications-bubbles" id="college-time">React</div>
            <div class="qualifications-bubbles" id="college-time">Node</div>
          </div>
          <h2>Competências</h2>
          <div class="qualifications">
            <div class="qualifications-bubbles" id="college-time">Inglês Fluente</div>
            <div class="qualifications-bubbles" id="college-time">Analfabeto Funcional em Japonês</div>
          </div>
        </div>
        <div id="bottombox" class="box">
            <h2>Minhas Redes</h2>
            <div class="socials">
              <a href="https://www.instagram.com/nobrega_gabriel07" target="_blank"><img class="icon" src="images/insta.jpg" alt="Insta"/></a>
              <a href="https://github.com/GabrielNSB007" target="_blank"><img class="icon" src="images/github.png" alt="Github"/></a>
              <a href=mailto:"gnsb@cin.ufpe.br" target="_blank"><img class="icon" src="images/gmail.png" alt="Gmail"/></a>
              <a href="https://www.linkedin.com/in/gabriel-n%C3%B3brega-453214378?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                  <img class="icon" src="images/LinkedIn_icon.svg.png" alt="Linkedin"/>
              </a>
            </div>
        </div>
      </div>
      <div class="space" id="rightspace">
        <div id="topbox" class="box">
          <img id="eu" class="myphoto" src="images/pessoa.png" alt="Foto de Gabriel Nóbrega" />
        </div>
    </div>
  </body>
</html>