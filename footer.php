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

    /* --- Feedback --- */
    .feedback-title {
      color: #003b5c;
      font-size: 70px;
      text-align: center;
      margin-top: 140px;
      letter-spacing: 1px;
    }

    .feedback-container {
      position: relative;
      width: 90%;
      max-width: 1200px;
      margin: 0 auto 100px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 400px;
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
      width: 350px;
      margin: 100px 10px 0 10px;
      text-align: center;
      padding-bottom: 30px;
      flex-shrink: 0;
    }

    .feedback-card .circle {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #ccc;
      margin: 20px auto;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .feedback-card h3 {
      margin: 10px 0;
      font-size: 1.2rem;
    }

    .feedback-card p {
      font-size: 0.95rem;
      color: #e8f7fc;
      padding: 0 15px;
    }

    .feedback-arrow {
      background-color: #003b5c;
      color: white;
      border: none;
      font-size: 1.7rem;
      border-radius: 50%;
      width: 50px;
      height: 50px;
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

    /* --- Footer --- */
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
      color: #ffb300;
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
  </style>
</head>
<body>

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
