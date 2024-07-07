<!DOCTYPE html>
<html lang="en">

  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Issatmh - plateforme </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-scholar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

 

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
            <img src="assets/images/issat.png"  alt="" style="width: 70px; margin-right:25px; margin-top:-10px; margin-left:10px;">
          </a>
                    <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
<ul class="nav">
  <li class="scroll-to-section"><a href="#top" class="active">Accueil</a></li>
  <li class="scroll-to-section"><a href="#description"> Description</a></li>
  <li class="scroll-to-section"><a href="#projets"> Projets</a></li>
  <li class="scroll-to-section"><a href="#skills">Conaissance </a></li>
  <li class="scroll-to-section"><a href="#contact">Contact</a></li>
</ul>   
<a class='menu-trigger'>
  <span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  
  <main>
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="text-center">
          <h1 style="color:white">Commander Votre Carte Electronique</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="container-custom hero mt-5">
    <div class="row">
      <!-- Colonne pour l'image -->
      <div class="col-md-6">
        <div class="card">
          <img src="assets/images/carte.jpg" class="card-img-top" alt="Image description">
        </div>
      </div>
      <!-- Colonne pour le contenu -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title">Importer votre modèle</h2>
            <p class="card-text">Glissez-déposez vos fichiers ici</p>
            <input type="file" id="fileInput" class="form-control mb-3" accept="image/*">
            <button class="btn btn-primary" onclick="importerImage()">Importer modèle</button>
          </div>
        </div>
        <!-- Paragraphe descriptif -->
        <p class="mt-3">Cette fonctionnalité vous permet d'importer votre propre modèle de carte électronique. Vous pouvez simplement glisser-déposer vos fichiers dans la zone spécifiée, puis cliquer sur le bouton "Importer modèle" pour commencer le processus.</p>
      </div>
    </div>
  </section>
</main>


</div>

  </main>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Issatmh. Tous droits réservés. &nbsp;&nbsp;&nbsp; </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/counter.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  <script>window.addEventListener('scroll', function() {
    var header = document.querySelector('.header-area');
    header.classList.toggle('transparent-navbar', window.scrollY === 0);
});</script>
<style>
    .container-custom {
    max-width: 1200px; 
    max-height: 1000px;
    margin-right: auto;
    margin-left: auto;
}
.transparent-navbar {
    background-color: transparent !important;
    transition: background-color 0.3s ease-in-out;
}

</style>
  </body>
</html>
