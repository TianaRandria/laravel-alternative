<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    @vite(['resources/scss/index.scss','resources/js/app.js'])
    
    <title>alternative.net</title>
</head>
<body>
<header>
    <nav class="navbar">
      <a href="{{ route('acceuil') }}">
        <h3 class="site-name">alternatives.net</h3>
      </a>
      <div class="search-form">
        <input type="search" id="site-search" class="search-input" name="rechercher"
          placeholder="Trouver une alternative">

        <a class="btn search-btn" href="#" role="button">Rechercher</a>



      </div>
    </nav>
  </header>
    @yield('content')
    <footer>
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-column" id="footer-left">
          <a href="index.html">
            <h2 class="footer-title">Alternatives.net</h2>
          </a>

          <p class="footer-texte">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
            Ut enim ad minim veniam.</p>
          <div class="footer-btn">
            <a class="boutton" href="{{ route('actualite') }}">Voir Plus</a>
          </div>
        </div>

        <div class="footer-column" id="footer-center">
          <div class="footer-menu-primary">
            <ul class="lien-footer-primary">

              <li class="apropos">A propos</li>
              <li><a class="link_footer" href="#">Contact</a></li>
              <li><a class="link_footer" href="#">Mention Légales</a></li>
              <li><a class="link_footer" href="#">Politique de confidentialité</a></li>

            </ul>
          </div>
        </div>

        <div class="footer-column" id="footer-right">
          <div class="footer-menu-secondary">
            <ul class="lien-footer-primary">

              <li class="apropos">A propos</li>
              <li><a class="link_footer" href="#">Contact</a></li>
              <li><a class="link_footer" href="#">Mention Légales</a></li>
              <li><a class="link_footer" href="#">Politique de confidentialité</a></li>

            </ul>
          </div>
        </div>
      </div>
      <div class="footer-black">
        <p class="copyright"><a href="#" class="copyright">Copyright 2022</a></p>
      </div>

    </div>
    </div>
  </footer>
</body>
</html>