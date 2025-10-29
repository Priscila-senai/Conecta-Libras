<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Conecta Libras - Menu</title>
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
      margin: 0;
      background-color: #ffffff;
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Gilker', sans-serif;
    }

    /* --- Menu fixo --- */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
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

    /* --- Popup Logout --- */
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
      z-index: 1000;
      display: none;
    }

    .popup-content {
      background: white;
      padding: 30px 40px;
      border-radius: 15px;
      text-align: center;
      max-width: 400px;
      font-family: 'Sanchez', sans-serif;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .popup-content h3 {
      font-size: 22px;
      color: #04334C;
      margin-bottom: 15px;
    }

    .popup-content p {
      color: #1fa3d1;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .popup-buttons {
      display: flex;
      justify-content: space-around;
      gap: 10px;
    }

    .popup-buttons button,
    #close-popup-btn {
      padding: 10px 25px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    #cancel-btn {
      background-color: #ccc;
      color: #04334C;
    }

    #logout-btn,
    #close-popup-btn {
      background-color: #FFBE1D;
      color: #04334C;
    }

    .popup-buttons button:hover,
    #close-popup-btn:hover {
      background-color: #e6ac17;
    }

    @media (max-width: 768px) {
      .search-container { width: 200px; }
      .pill-button { width: 250px; }
    }
  </style>
</head>
<body>

<!-- POPUP DE LOGOUT -->
<div id="logout-popup" class="popup-overlay">
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

<script>
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
      window.location.href = "semcadastro.php";
    });
  });
</script>

</body>
</html>
