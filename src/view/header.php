<h1 class="brand"><img src="img/caravera.jpg"> <img src="img/banniere3.jpg"> </h1>

<!-- Création Barre de Navigation noire avec balise NAV html5 -->
<!-- Balise NAV englobe toute la  navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
    
        
       <!-- DIV qui permet la navigaton sur terminal mobile -->
      <div class="navbar-header">
      <!-- Barre de navigation smartphone avec menu minifi� -->
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarmobile" 
           aria-expanded= "false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <!-- Nom ou Logo - class navbar-brand -->
          <!-- <a href="/" class="navbar-brand">Mobile First</a> -->
      </div>
    
    
     <!-- DIV qui permet la navigation sur tablette et écran -->
    <div class="collapse navbar-collapse" id="navbarmobile">
    <!-- MENU -->
      <ul class="nav navbar-nav">
         <li class="divider"><a href="index.php"> Page d'accueil </a></li>
         <li><a href="#">Login</a></li>
         <li><a href='http://localhost:8080/EssaiPHP/voter'>Voter</a></li>
         <li><a href='http://localhost:8080/EssaiPHP/articletop10'>Top 10</a></li>
         <li><a href='http://localhost:8080/EssaiPHP/creercompte'>Créer un compte</a></li>
      </ul>
    </div>
    <!--Fin Barre de Navigation -->
 </nav>
