<style>

    /* Header styling */
    .header {
      background-color: #1f1f1f;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 1rem;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1100;
    }

    .header img {
      height: 50px;
      width: auto;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .lang-toggle {
      margin-right: 1rem;
    }

    .hamburger {
      font-size: 1.5rem;
      cursor: pointer;
      background: none;
      border: none;
      color: white;
      z-index: 1200;
    }

    /* Sidebar menu */
    .sidebar {
      position: fixed;
      top: 0;
      right: -300px;
      width: 300px;
      height: 100%;
      background-color: #2b2b2b;
      color: white;
      padding: 1rem 0 1rem 0;
      transition: right 0.3s ease;
      box-shadow: -2px 0 10px rgba(0,0,0,0.5);
      z-index: 1000;
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar-search-bar {
      width: 100%;
      background: #fff;
      padding: 4rem 1rem 0.75rem 1rem;
      box-sizing: border-box;
      border-radius: 0;
      border-bottom: 1px solid #444;
      margin-bottom: 1rem;
    }

    .sidebar-search-bar input {
      width: 100%;
      padding: 0.5rem;
      border: none;
      border-radius: 0;
      background: #fff;
      color: #232323;
      font-size: 1rem;
      outline: none;
    }

    .sidebar ul {
      list-style: none;
      padding: 0 1rem;
      margin: 0;
    }

    .sidebar li {
      padding: 0.75rem 0;
      border-bottom: 1px solid #444;
      cursor: pointer;
    }

    .sidebar li:hover {
      background-color: #3a3a3a;
    }

  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <img src="../css/img/logo.png" alt="MCN Logo">
    </div>
    <div style="display: flex; align-items: center; gap: 1rem;">
      <div class="lang-toggle">fr ▼</div>
      <button class="hamburger" id="hamburgerBtn">☰</button>
    </div>
  </header>

  <div id="sidebar" class="sidebar">
    <div class="sidebar-search-bar">
      <input type="text" placeholder="rechercher..." />
    </div>
    <ul>
      <li>Accueil</li>
      <li>Introduction</li>
      <li>▶ Histoire</li>
      <li>Architecture</li>
      <li>Accessibilité</li>
      <li>Contact</li>
    </ul>
  </div>

  <script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const sidebar = document.getElementById('sidebar');

    hamburgerBtn.addEventListener('click', function () {
      sidebar.classList.toggle('open');
    });
  </script>
