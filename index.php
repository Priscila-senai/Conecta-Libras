<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Conecta Libras</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* --- Reset e corpo --- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    @font-face {
  font-family: 'Sanchez';
  src: url('fonte/sanchez-font.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Gilker';
  src: url('fonte/gliker-regular.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

body {
  font-family: 'Sanchez', sans-serif;
}





h1, h2, h3, h4, h5, h6 {
  font-family: 'Gilker', sans-serif;
}






    /* --- Menu fixo --- */
    
    .navbar {
  
  position: fixed; /* faz o menu ficar fixo */
  top: 0;          /* fixa no topo */
  left: 0;         /* alinha à esquerda */
  width: 100%;     /* ocupa toda a largura */
  z-index: 999;    /* fica acima de outros elementos */
  background-color: rgba(4, 51, 76, 0.6);
  padding: 15px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 15px;
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}
    

    .logo {
      color: #FFBE1D;
      font-size: 22px;
      font-weight: bold;
      text-decoration: none;
      white-space: nowrap;
    }

    .pill-button {
      background-color: #063F5C;
      border: none;
      border-radius: 50px;
      font-size: 16px;
      font-family: 'Sanchez';
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: stretch;
      height: 50px;
      padding: 0;
      gap: 0;
      width: 400px;
    }

    .pill-button span,
    .pill-button a {
      color: #FFBE1D;
      padding: 0 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1;
      transition: background-color 0.3s ease;
      white-space: nowrap;
      border-radius: 50px;
      text-decoration: none;
    }

    .pill-button span:hover,
    .pill-button a:hover {
      background-color: #01283C;
    }

    .search-container {
      display: flex;
      align-items: center;
      background-color: white;
      border-radius: 50px;
      padding: 0 15px;
      height: 40px;
      width: 500px;
    }

    .search-input {
      flex: 1;
      border: none;
      outline: none;
      font-size: 14px;
      padding: 8px 0;
      background: transparent;
    }

    .search-img {
      width: 22px;
      height: 22px;
      cursor: pointer;
      margin-left: 8px;
    }

    .user-section {
      display: flex;
      align-items: center;
      gap: 12px;
      color: white;
      font-size: 14px;
      white-space: nowrap;
    }

    .avatar {
      width: 32px;
      height: 32px;
      background-color: #ddd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #333;
    }

    .settings-icon {
      color: white;
      font-size: 18px;
      cursor: pointer;
    }

    body {
     margin: 0;
  font-family: 'Sanchez';
  background-color: #ffffff;
  overflow-x: hidden;
  padding-top: 0; /* tiramos o espaçamento do header fixo */
    }

    main {
      padding: 40px;
      text-align: center;
    }


    /* --- Carrossel principal --- */
    .carousel-container {
      width: 100vw;
      height: 100vh;
      color: white;
      position: relative;
    }

    .carousel-slide {
      width: 100%;
      height: 100%;
      display: none;
      animation: fadeIn 0.6s ease-in-out;
      position: absolute;
      top: 0;
      left: 0;
    }

    .carousel-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 0;
    }

    .carousel-slide::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.83);
      z-index: 1;
    }

    .carousel-slide.active {
      display: flex;
      align-items: center;
      padding: 80px 60px;
    }

    .carousel-slide > div {
      position: relative;
      z-index: 20;
      max-width: 600px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-size: 48px;
      margin-bottom: 25px;
      font-weight: bold;
      letter-spacing: 1px;
      line-height: 1.2;
      text-align: left;
    }

    p {
      line-height: 1.8;
      margin-bottom: 35px;
      font-size: 20px;
      text-align: justify;
    }

    .btn-saiba-mais {
      background-color: #FFBE1D;
      color: #04334C;
      border: none;
      padding: 15px 35px;
      border-radius: 30px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 18px;
      font-family: 'Sanchez'
    }

    .btn-saiba-mais:hover {
      background-color: #419EBD;
      color: white;
    }

    .carousel-indicators {
      display: flex;
      align-items: center;
      gap: 10px;
      position: absolute;
      bottom: 130px;
      left: 60px;
      z-index: 20;
    }

    .indicator {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background-color: #ddd;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .indicator.active {
      width: 45px;
      height: 7px;
      border-radius: 3px;
      background-color: white;
    }

    /* --- Cartão branco --- */
    .bloco-branco {
      width: 100vw;
      min-height: 500px;
      background: white;
      border-radius: 30px 60px 0 0;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      padding: 40px 20px;
      z-index: 1;
      position: relative;
      margin-top: -80px;
      margin-bottom: 80px; /* espaço antes da faixa azul */
    }

    /* --- Carrossel interno --- */
    .inner-carousel {
      position: relative;
      width: 90%;
      height: 500px; 
      overflow: hidden;
      border-radius: 20px;
    }

    .inner-slide {
      display: none;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }

    .inner-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 20px;
    }

    .inner-slide.active {
      display: block;
    }

    .inner-indicators {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-top: 10px;
      z-index: 10;
    }

    .inner-indicator {
      width: 14px;
      height: 14px;
      background-color: #063F5C;
      border-radius: 50%;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .inner-indicator.active {
      background-color: #FFBE1D;
    }

    /* --- FAIXA AZUL --- */
    .faixa {
      background-color: #063F5C;
      transform: skewY(-3deg);
      height: 640px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      margin-top: 0;
    }

    .conteudo {
      transform: skewY(3deg);
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 100px;
      color: white;
    }

    .celular {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .img-celular {
      width: 530px;
      height: auto;
      display: block;
    }

    .texto {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .texto h2 {
      font-size: 60px;
      font-weight: 700;
      margin-bottom: 4px;
      line-height: 1.2;
    }

    .qr {
      width: 340px;
      height: 340px;
      border-radius: 10px;
      margin-bottom: 40px;
    }

    /* --- Feedback --- */
    .feedback-title {
      color: #003b5c;
  font-size: 70px; /* maior */
  text-align: center;
  margin-top: 140px;
  letter-spacing: 1px;
    }

    .feedback-container {
        position: relative;
  width: 90%; /* maior área */
  max-width: 1200px;
  margin: 0 auto 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 400px; /* aumenta altura */
    }

    .feedback-carousel {
  overflow: hidden;
  width: 100%;
    }

    .feedback-cards {
        display: flex;
  transition: transform 0.5s ease-in-out;
    }

    .feedback-card {
        background: linear-gradient(to bottom, #003b5c 35%, #1fa3d1 35%);
  color: white;
  border-radius: 15px;
  width: 350px; /* maior */
  margin: 0 10px;
  text-align: center;
  padding-bottom: 30px;
  flex-shrink: 0;
  margin-top: 100px; /* sobe um pouco os cards */
    }

.feedback-card .circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background-color: #ccc; /* cor de fallback */
    margin: 20px auto;

    /* Adicione estas linhas para a imagem aparecer corretamente */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}


    .feedback-card h3 {
        margin: 10px 0;
  font-size: 1.2rem; /* maior */
    }

    .feedback-card p {
        font-size: 0.95rem; /* maior */
  color: #e8f7fc;
  padding: 0 15px;

    }

    .feedback-arrow {
       background-color: #003b5c;
  color: white;
  border: none;
  font-size: 1.7rem; /* maior */
  border-radius: 50%;
  width: 50px; /* maior */
  height: 50px; /* maior */
  cursor: pointer;
  transition: background 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 2;
    }

    .feedback-arrow:hover {
       background-color: #1fa3d1;
    }

    .feedback-arrow.left { left: -50px; }
    .feedback-arrow.right { right: -50px; }

    @media (max-width: 768px) {
      .feedback-arrow.left { left: 5px; }
      .feedback-arrow.right { right: 5px; }
    }

    /* --- Responsivo geral --- */
    @media (max-width: 768px) {
      .carousel-slide > div { max-width: 90%; }
      h1 { font-size: 36px; }
      p { font-size: 18px; }
      .btn-saiba-mais { padding: 12px 25px; font-size: 16px; }
      .search-container { width: 200px; }
      .pill-button { width: 250px; }
      .bloco-branco { min-height: 400px; }
      .inner-carousel { height: 65%; }
      .faixa { height: auto; padding: 60px 0; }
      .conteudo { flex-direction: column; gap: 40px; }
      .img-celular { width: 260px; }
      .texto h2 { font-size: 28px; }
      .qr { width: 130px; height: 130px; }
    }











footer {
  background-color: #0b3b5c;
  color: white;
  padding: 60px 40px 40px 40px;
  position: relative;
  font-size: 16px;
}

.back-to-top {
  display: inline-block;
  background-color: #1fa3d1;
  color: white;
  padding: 12px 24px;
  border-radius: 20px;
  text-decoration: none;
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  font-weight: bold;
  font-size: 16px;
  transition: background 0.3s;
  z-index: 10;
}

.back-to-top:hover {
  background-color: #1489b3;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  max-width: 1200px;
  margin: auto;
  gap: 40px;
}

.footer-section {
  flex: 1 1 220px;
  margin: 0 10px;
  text-align: center;
}

.footer-section p, 
.footer-section a {
  color: white;
  font-size: 16px;
  text-decoration: none;
  line-height: 1.6;
}

.footer-section a:hover {
  text-decoration: underline;
}

.footer-section h3 {
  color: #ffb300; /* amarelo */
  margin-bottom: 20px;
  font-size: 20px;
}

/* Newsletter */
.newsletter {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-top: 10px;
}

.newsletter input[type="email"] {
  padding: 10px;
  border-radius: 5px;
  border: none;
  flex: 1;
  font-size: 16px;
  max-width: 220px;
}

.newsletter button {
  padding: 10px 18px;
  border: none;
  border-radius: 5px;
  background-color: #1fa3d1;
  color: white;
  cursor: pointer;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.3s;
}

.newsletter button:hover {
  background-color: #1489b3;
}

/* Contato e redes sociais */
.contact-images,
.social-images {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
  margin-top: 10px;
  font-family: 'Gilker';
}

.contact-images a img,
.social-images a img {
  width: 40px;
  height: 40px;
  object-fit: contain;
  display: block;
  cursor: pointer;
  transition: transform 0.3s;
}

.contact-images a img:hover,
.social-images a img:hover {
  transform: scale(1.1);
}

@media(max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
    gap: 30px;
  }

  .newsletter input[type="email"] {
    width: 200px;
  }
}


.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.7);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000; /* acima do menu */
}

.popup-content {
  background: white;
  padding: 30px 40px;
  border-radius: 15px;
  text-align: center;
  max-width: 400px;
}

.popup-buttons {
  margin-top: 20px;
  display: flex;
  justify-content: space-around;
}

.popup-buttons button {
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}

#cancel-btn {
  background-color: #ccc;
}

#logout-btn {
  background-color: #FFBE1D;
  color: #04334C;
}



/* Popup Logout - Estilizado */
#logout-popup .popup-content {
  background-color: #ffffff;
  padding: 40px;
  border-radius: 20px;
  max-width: 400px;
  text-align: center;
  font-family: 'Sanchez', sans-serif;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  transition: transform 0.3s ease, opacity 0.3s ease;
}

#logout-popup .popup-content h3 {
  font-size: 22px;
  color: #04334C;
  margin-bottom: 15px;
}

#logout-popup .popup-content p {
  color: #1fa3d1;
  font-size: 16px;
  margin-bottom: 25px;
}

#logout-popup .popup-buttons {
  display: flex;
  justify-content: space-around;
  gap: 10px;
}

#logout-popup .popup-buttons button,
#logout-popup #close-popup-btn {
  padding: 10px 25px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.3s ease;
}

#logout-popup .popup-buttons #cancel-btn {
  background-color: #ccc;
  color: #04334C;
}

#logout-popup .popup-buttons #logout-btn,
#logout-popup #close-popup-btn {
  background-color: #FFBE1D;
  color: #04334C;
}

#logout-popup .popup-buttons button:hover,
#logout-popup #close-popup-btn:hover {
  background-color: #e6ac17; /* amarelo mais escuro ao passar o mouse */
}



  </style>
</head>
<body>

<!-- POPUP DE LOGOUT -->
<div id="logout-popup" class="popup-overlay" style="display:none;">
  <div class="popup-content">
    <h3>Deseja sair da sua conta?</h3>
    <div class="popup-buttons">
      <button id="cancel-btn">Cancelar</button>
      <button id="logout-btn">Sair</button>
    </div>
  </div>
</div>



  <!-- Menu fixo -->
  <div class="navbar">
      <!-- Logo -->
       <img src="img/logoextensa.png" alt="Logo Conecta Libras" style="height: 50px;">

      <!-- Botões Pílula -->
      <button class="pill-button">
        <span>Início</span>
        <a href="inclusao.html" target="_blank">Inclusão</a>
        <span>Sobre Nós</span>
      </button>

      <!-- Barra de Pesquisa -->
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Pesquisar...">
        <img src="Img/pesquisa.png" alt="Pesquisar" class="search-img">
      </div>

      <!-- Área do Usuário -->
  <div class="user-section">
  <span id="user-name">Logado como Beatriz</span>
  <div id="user-avatar" class="avatar">B</div>
  
  
</div>
    </div>







  <!-- Carrossel principal -->
  <div class="carousel-container">
    <div class="carousel-slide active">
      <img src="img/inclusao.png" alt="Slide 1">
      <div>
        <h1>CONECTA LIBRAS</h1>
        <p>A comunicação não tem barreiras quando existe acessibilidade. O Conecta Libras aproxima pessoas e amplia conexões através da Língua Brasileira de Sinais, criando oportunidades, fortalecendo laços e promovendo inclusão de forma prática e eficaz.</p>
        <button class="btn-saiba-mais">Saiba mais</button>
      </div>
    </div>
    <div class="carousel-slide">
      <img src="img/acessibilidade.png" alt="Slide 2">
      <div>
        <h1>INCLUSÃO E ACESSIBILIDADE</h1>
        <p>Promovemos um ambiente onde todos possam participar de forma igualitária. A acessibilidade é o primeiro passo para garantir respeito e dignidade, tornando o aprendizado, a comunicação e a convivência mais fáceis e significativas para cada indivíduo.</p>
        <button class="btn-saiba-mais">Saiba mais</button>
      </div>
    </div>
    <div class="carousel-slide">
      <img src="img/interprete.webp" alt="Slide 3">
      <div>
        <h1>SOMOS TODOS IGUAIS</h1>
        <p>Valorizamos a diversidade e acreditamos em uma sociedade mais justa. A inclusão transforma vidas, promove empatia e cria um futuro com mais oportunidades para todos, respeitando cada pessoa sem distinção ou preconceito.</p>
        <button class="btn-saiba-mais">Saiba mais</button>
      </div>
    </div>

    <div class="carousel-indicators">
      <div class="indicator active" data-slide="0"></div>
      <div class="indicator" data-slide="1"></div>
      <div class="indicator" data-slide="2"></div>
    </div>
  </div>

  <!-- Cartão branco com carrossel interno -->
  <div class="bloco-branco">
    <div class="inner-carousel">
      <div class="inner-slide active">
        <img src="img/conectando.png" alt="Slide 1">
      </div>
      <div class="inner-slide">
        <img src="img/aprendapratique.png" alt="Slide 2">
      </div>
      <div class="inner-slide">
        <img src="img/converta.png" alt="Slide 3">
      </div>
    </div>

    <div class="inner-indicators">
      <div class="inner-indicator active" data-slide="0"></div>
      <div class="inner-indicator" data-slide="1"></div>
      <div class="inner-indicator" data-slide="2"></div>
    </div>
  </div>

  <!-- FAIXA AZUL AO FINAL -->
  <section class="faixa">
    <div class="conteudo">
      <div class="celular">
        <img src="img/app.png" alt="Celular com fundo amarelo" class="img-celular">
      </div>

      <div class="texto">
        <h2>VEJA O<br>NOSSO APP</h2>
        <img src="img/qrcode.png" alt="QR Code" class="qr">
      </div>
    </div>
  </section>

  <!-- Feedback -->
  <h2 class="feedback-title">FEEDBACK</h2>
  <div class="feedback-container">
    <button class="feedback-arrow left" id="prev">&#10094;</button>
    <div class="feedback-carousel">
      <div class="feedback-cards" id="cards">
        <div class="feedback-card">
           <div class="circle" style="background-image: url('img/kimtaehyung.webp');"></div>
          <h3>kim taehyung</h3>
          <p>O Conecta Libras tornou a comunicação muito mais fácil! A interface é super intuitiva e o conteúdo é excelente. Adorei a experiência!</p>
        </div>


        <div class="feedback-card">
           <div class="circle" style="background-image: url('img/kim.jpeg');"></div>
          <h3>kim hongjoong</h3>
          <p>Uma plataforma incrível! A inclusão é realmente prioridade aqui. Estou impressionado com a qualidade e praticidade do site e aplicativo.</p>
        </div>


        <div class="feedback-card">
        <div class="circle" style="background-image: url('img/daniela.webp');"></div>
          <h3>Daniela Avanzini</h3>
          <p>Simplesmente sensacional! O Conecta Libras aproxima pessoas de forma prática e eficiente. Recomendo a todos que buscam acessibilidade.</p>
        </div>

        <div class="feedback-card">
          <div class="circle" style="background-image: url('img/andrew.jfif');"></div>
          <h3>Andrew Garfield</h3>
          <p>O site é muito bem feito, bonito e fácil de navegar. Sinto que realmente faz a diferença na comunicação e inclusão de todos.</p>
        </div>
      </div>
    </div>
    <button class="feedback-arrow right" id="next">&#10095;</button>
  </div>

  <script>
    // Carrossel principal
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach(slide => slide.classList.remove('active'));
      indicators.forEach(ind => ind.classList.remove('active'));
      slides[index].classList.add('active');
      indicators[index].classList.add('active');
      currentSlide = index;
    }

    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => showSlide(index));
    });

    setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 5000);

    // Carrossel interno do cartão
    const innerSlides = document.querySelectorAll('.inner-slide');
    const innerIndicators = document.querySelectorAll('.inner-indicator');
    let currentInner = 0;

    function showInnerSlide(index) {
      innerSlides.forEach(slide => slide.classList.remove('active'));
      innerIndicators.forEach(ind => ind.classList.remove('active'));
      innerSlides[index].classList.add('active');
      innerIndicators[index].classList.add('active');
      currentInner = index;
    }

    innerIndicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => showInnerSlide(index));
    });

    setInterval(() => {
      currentInner = (currentInner + 1) % innerSlides.length;
      showInnerSlide(currentInner);
    }, 4000);

    // Feedback carousel
    const cards = document.getElementById('cards');
    const next = document.getElementById('next');
    const prev = document.getElementById('prev');
    let index = 0;

    next.addEventListener('click', () => {
      const cardWidth = document.querySelector('.feedback-card').offsetWidth + 20;
      if (index < cards.children.length - 3) index++;
      cards.style.transform = `translateX(-${index * cardWidth}px)`;
    });

    prev.addEventListener('click', () => {
      const cardWidth = document.querySelector('.feedback-card').offsetWidth + 20;
      if (index > 0) index--;
      cards.style.transform = `translateX(-${index * cardWidth}px)`;
    });

  
    const userName = document.getElementById('user-name');
  const userAvatar = document.getElementById('user-avatar');



const logoutPopup = document.getElementById('logout-popup');
const cancelBtn = document.getElementById('cancel-btn');
const logoutBtn = document.getElementById('logout-btn');

userName.addEventListener('click', () => {
  logoutPopup.style.display = 'flex';
});
userAvatar.addEventListener('click', () => {
  logoutPopup.style.display = 'flex';
});

cancelBtn.addEventListener('click', () => {
  logoutPopup.style.display = 'none';
});

logoutBtn.addEventListener('click', () => {
  const popupContent = logoutPopup.querySelector('.popup-content');
  popupContent.innerHTML = `
    <h3>Você foi deslogada com sucesso!</h3>
    <button id="close-popup-btn">Fechar</button>
  `;

   const closeBtn = document.getElementById('close-popup-btn');
  closeBtn.addEventListener('click', () => {
    logoutPopup.style.display = 'none';
    window.location.href = "semcadastro.php"; // redireciona ao clicar em Fechar
  });
});




  </script>



  <!-- Footer -->
  <footer>
    <a href="#top" class="back-to-top">Voltar para o início ↑</a>

    <div class="footer-container">
      <!-- Conecta Libras com logo -->
      <div class="footer-section">
        <img src="img/logoextensa.png" alt="ConectaLibras Logo" style="max-width: 200px; margin-bottom: 15px;">
        <p>
          Explore as lutas, conquistas e a importância da Libras na construção de uma sociedade mais inclusiva.
        </p>
      </div>

      <!-- Contato -->
      <div class="footer-section">
        <h3>Conecte-se</h3>
        <div class="contact-images">
          <a href="mailto:conectalibras@gmail.com">
            <img src="img/email.png" alt="Email" />
          </a>
          <a href="tel:+5511976829391">
            <img src="img/whats.png" alt="Telefone" />
          </a>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="footer-section">
        <h3>Newsletter</h3>
        <form class="newsletter">
          <input type="email" placeholder="Digite o seu e-mail">
          <button type="submit">→</button>
        </form>
      </div>

      <!-- Redes sociais -->
      <div class="footer-section">
        <h3>Redes sociais</h3>
        <div class="social-images">
          <a href="https://www.instagram.com/"><img src="img/insta.png" alt="Instagram"></a>
          <a href="https://www.facebook.com/?locale=pt_BR"><img src="img/face.png" alt="Facebook"></a>
          <a href="https://x.com/"><img src="img/x.png" alt="X"></a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
