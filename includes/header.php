
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
    <li><a href="/site/accueil.php" style="color: inherit; text-decoration: none;">Accueil</a></li>
    <li><a href="/site/accueil.php#introduction" style="color: inherit; text-decoration: none;">Introduction</a></li>
    <li><a href="/site/accueil.php#histoire" style="color: inherit; text-decoration: none;">Histoire</a></li>
    <li><a href="/site/architecture.php" style="color: inherit; text-decoration: none;">Architecture</a></li>
    <li><a href="/site/accessibilite.php" style="color: inherit; text-decoration: none;">Accessibilité</a></li>
    <li><a href="/site/credits.php" style="color: inherit; text-decoration: none;">Crédits</a></li>
    </ul>
  </div>

  <script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const sidebar = document.getElementById('sidebar');

    hamburgerBtn.addEventListener('click', function () {
      sidebar.classList.toggle('open');
    });
  </script>
