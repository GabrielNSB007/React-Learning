<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfólio</title>
    <style>
      :root {
        --main-color: rgb(231, 78, 31);
        --secondary-color: rgb(63, 56, 56);
        --background-color: rgb(240, 240, 240);
        --border-radius: 16px;
        --box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        --font-type: Arial, Helvetica, sans-serif;
      }

      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        background-image: url("https://i.ibb.co/MxCKNkJv/6325313.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        font-family: var(--font-type);
      }

      .infobox {
        width: 80vw;
        max-width: 1400px;
        height: 85vh;
        display: flex;
        justify-content: space-evenly;
        align-items: stretch;
        background-color: white;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        gap: 20px;
        padding: 20px;
      }

      .space {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
        min-width: 0;
      }
      
      .box {
        width: 100%;
        background-color: var(--background-color);
        border-radius: var(--border-radius);
        padding: 20px;
        box-shadow: var(--box-shadow);
        transform: scale(1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: var(--secondary-color);
      }

      .box:hover {
        transform: scale(1.03);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        cursor: pointer;
      }
      
      #leftspace #topbox {
        flex-grow: 2;
      }

      #leftspace #bottombox {
        flex-grow: 1;
      }

      .chatterbox {
        width: 100%;
        text-align: left;
        color: var(--secondary-color);
        margin-bottom: 20px;
      }

      .qualifications {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        width: 100%;
        gap: 10px;
        margin: 10px 0;
      }

      .qualifications-bubbles {
        width: auto;
        height: auto;
        border-radius: 16px;
        border: 2px solid var(--main-color);
        color: var(--main-color);
        padding: 8px 12px;
        font-size: 0.9rem;
      }

      h1, h2, h3 {
        color: var(--main-color);
        text-align: left;
        margin-bottom: 10px;
      }

      h1 { font-size: 1.8rem; }
      h2 { font-size: 1.4rem; }
      h3 { font-size: 1.1rem; }
      p { line-height: 1.5; }

      #college-time {
        color: var(--secondary-color);
        border-color: var(--secondary-color);
      }

      #college-name {
        font-style: italic;
      }

      #rightspace .box {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
      }

      .myphoto {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
      }

      .socials {
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding-top: 10px;
      }

      .icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        transition: transform 0.3s ease;
      }

      .icon:hover {
        transform: scale(1.1);
      }

      @media (max-width: 1024px) {
        body {
          align-items: flex-start;
          padding-top: 20px;
        }

        .infobox {
          flex-direction: column;
          height: auto;
          width: 90vw;
          max-height: none;
        }

        .space {
          width: 100%;
          height: auto;
        }

        #rightspace {
          min-height: 300px;
        }
      }

      @media (max-width: 600px) {
        .infobox {
          width: 95vw;
          padding: 15px;
        }

        .box {
          padding: 15px;
        }

        h1 { font-size: 1.5rem; }
        h2 { font-size: 1.2rem; }
        .qualifications-bubbles { font-size: 0.8rem; }
        
        .icon {
          width: 50px;
          height: 50px;
        }
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
            <div class="qualifications-bubbles" id="college-time">CSS</div>
            <div class="qualifications-bubbles" id="college-time">React</div>
            <div class="qualifications-bubbles" id="college-time">Node</div>
          </div>
          <h2>Idiomas</h2>
          <div class="qualifications">
            <div class="qualifications-bubbles" id="college-time">Inglês Fluente</div>
            <div class="qualifications-bubbles" id="college-time">Japonês Básico</div>
          </div>
        </div>
        <div id="bottombox" class="box">
          <h2>Minhas Redes</h2>
          <div class="socials">
            <a href="https://www.linkedin.com/in/gabriel-n%C3%B3brega-453214378" target="_blank"><img class="icon" src="https://i.ibb.co/v5CVwTg/Linked-In-icon-svg.png" alt="LinkedIn"></a>
            <a href="https://github.com/GabrielNSB007" target="_blank"><img class="icon" src="https://i.ibb.co/ZpTntNJ5/github.png" alt="github"></a>
            <a href="mailto:gnsb@cin.ufpe.br" target="_blank"><img class="icon" src="https://i.ibb.co/0p2nmPP9/gmail.png" alt="gmail"></a>
            <a href="https://www.instagram.com/nobrega_gabriel07" target="_blank"><img class="icon" src="https://i.ibb.co/1Y8zspCG/Instagram-icon.png" alt="Instagram"></a>
          </div>
        </div>
      </div>
      <div class="space" id="rightspace">
        <div class="box">
          <a href="https://ibb.co/zWTH1LNr" target="_blank"><img class="myphoto" src="https://i.ibb.co/NgdnXk7s/pessoa.png" alt="Foto pessoal"></a>
        </div>
      </div>
    </div>
  </body>
</html>