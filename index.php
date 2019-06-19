<?php
  include './connexion.php';
  include './authentification.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="./main.d8e0d294.css" rel="stylesheet">
  

  
  <title>Hugo Six</title>  
</head>

<body class="">

<!-- Add your content of header -->
<div class="background-color-layer" style="background-image: url('hugo_six_fond_cv.jpg')"
></div>
<main class="content-wrapper">
  <header class="white-text-container section-container">
  <div class="col-xs-12">
    <p class="h5 date-title">Connexion</p>
    <form name="authentification" method="post" action="authentification.php">
      <p>Email: </p> <input type="text" name="email"/> <br/>
      <p>Mot de passe: </p> <input type="password" name="password"/><br/>
      <input type="submit" name="authentification" value="Connexion"/>
    </form>
  </div>
    <div class="text-center">
      
      <h1><?php
      error_reporting(E_ALL);
      ini_set('display_errors', '1');
      $sql = 'SELECT Prenom, Nom FROM personne_CV WHERE ID_personne = 1';
      $conn = new Connexion();
      $rep_sql = $conn->execute($sql);
      foreach ($rep_sql as &$value) {
      echo(utf8_encode($value) . ' ');}
      ?></h1>

      <p><?php
      $sql2 = 'SELECT Profession FROM personne_CV WHERE ID_personne = 1';
      $conn = new Connexion();
      $rep_sql = $conn->execute($sql2);
      foreach ($rep_sql as &$value) {
      echo(utf8_encode($value) . ' ');}
      ?></p>
    </div>
  </header>



<!-- Add your site or app content here -->
 
 <div class="container">
   <div class="row">
     <div class="col-xs-12">

        <div class="card">
          <div class="card-block">
            <h2>About me</h2>
            <div class="row">
              <div class="col-md-4">
                <p><img src="./photo_hugo.jpg" class="img-responsive" alt="Hugo Six"></p>
              </div>
              <div class="col-md-8">

              <p><?php
              $sql2 = 'SELECT Presentation FROM personne_CV WHERE ID_personne = 1';
              $conn = new Connexion();
              $rep_sql = $conn->execute($sql2);
              foreach ($rep_sql as &$value) {
              echo(utf8_encode($value) . ' ');}
              ?></p>

              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Projets</h2>
            <div class="row">
              <!-- <div class="col-md-4">
                <a href="PSI/RC2.html"><img src="./assets/images/img-02.jpg" class="img-responsive" alt=""></a>
                <a href="PSI/RC2.html"><h3 class="h5">PSI</h3></a>
                <p>June 2017</p>
              </div> -->
              <div class="col-md-4">
              <small class="date"><?php
                    $sql = 'SELECT Periode_projet FROM projets WHERE ID_projet = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Nom_projet FROM projets WHERE ID_projet = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Description_projet FROM projets WHERE ID_projet = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
              </div>
              <div class="col-md-4">
              <small class="date"><?php
                    $sql = 'SELECT Periode_projet FROM projets WHERE ID_projet = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Nom_projet FROM projets WHERE ID_projet = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Description_projet FROM projets WHERE ID_projet = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
                  </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h2>Expérience Professionnelle</h2>
            <div class="work-experience">
            <small class="date"><?php
                    $sql = 'SELECT Date_debut_exp, Date_fin_exp, Type_contrat FROM experiences_professionnelles WHERE ID_exp = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Nom_entreprise FROM experiences_professionnelles WHERE ID_exp = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Mission_libelle FROM experiences_professionnelles WHERE ID_exp = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
            </div>

            <div class="work-experience">
              <small class="date">2017</small>
              <small class="date"><?php
                    $sql = 'SELECT Date_debut_exp, Date_fin_exp, Type_contrat FROM experiences_professionnelles WHERE ID_exp = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '    ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Nom_entreprise FROM experiences_professionnelles WHERE ID_exp = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Mission_libelle FROM experiences_professionnelles WHERE ID_exp = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
            </div>

            <div class="work-experience">
            <small class="date"><?php
                    $sql = 'SELECT Date_debut_exp, Date_fin_exp, Type_contrat FROM experiences_professionnelles WHERE ID_exp = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Nom_entreprise FROM experiences_professionnelles WHERE ID_exp = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Mission_libelle FROM experiences_professionnelles WHERE ID_exp = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
            </div>
          </div>
        </div>
        

        <div class="card">
          <div class="card-block">
            <h2>Cursus</h2>
            <div class="row">
               <div class="col-md-4">
                <div class="education-experience">
                  <small class="date"><?php
                    $sql = 'SELECT Date_debut_formation, Date_fin_formation FROM formations WHERE ID_formation = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Formation FROM formations WHERE ID_formation = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Formateur FROM formations WHERE ID_formation = 3';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="education-experience">
                <small class="date"><?php
                    $sql = 'SELECT Date_debut_formation, Date_fin_formation FROM formations WHERE ID_formation = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Formation FROM formations WHERE ID_formation = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Formateur FROM formations WHERE ID_formation = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?> </p>
                </div>
                
              </div>
             
              <div class="col-md-4">
                <div class="education-experience">
                <small class="date"><?php
                    $sql = 'SELECT Date_debut_formation, Date_fin_formation FROM formations WHERE ID_formation = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . '   ');}
                    ?></small>
                  <h3 class="h5 date-title"><?php
                    $sql = 'SELECT Formation FROM formations WHERE ID_formation = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </h3>
                  <p><?php
                    $sql = 'SELECT Formateur FROM formations WHERE ID_formation = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-block">
            <h2>Langues</h2>
            <div class="row">
              <div class="col-md-4">
                <div class="language-experience">
                  <h3 class="h5"><?php
                    $sql2 = 'SELECT Langue FROM langues WHERE ID_langue = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql2);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  
                    <small><?php
                    $sql2 = 'SELECT Note_langue FROM langues WHERE ID_langue = 1';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql2);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>/10</small></h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="language-experience">
                <h3 class="h5"><?php
                    $sql2 = 'SELECT Langue FROM langues WHERE ID_langue = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql2);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>  
                    <small><?php
                    $sql2 = 'SELECT Note_langue FROM langues WHERE ID_langue = 2';
                    $conn = new Connexion();
                    $rep_sql = $conn->execute($sql2);
                    foreach ($rep_sql as &$value) {
                    echo(utf8_encode($value) . ' ');}
                    ?>/10</small></h3>
                </div>
              </div>
            </div>
          </div>
          </div>
        

        <div class="card">
          <div class="card-block">
            <h2>Contact</h2>
            <h3> Téléphone: </h3> <p>0<?php
              $sql2 = 'SELECT Telephone FROM personne_CV WHERE ID_personne = 1';
              $conn = new Connexion();
              $rep_sql = $conn->execute($sql2);
              foreach ($rep_sql as &$value) {
              echo(utf8_encode($value) . ' ');}
              ?></p>
                       
            <h3> Mail: </h3> <p><?php
              $sql2 = 'SELECT Email FROM personne_CV WHERE ID_personne = 1';
              $conn = new Connexion();
              $rep_sql = $conn->execute($sql2);
              foreach ($rep_sql as &$value) {
              echo(utf8_encode($value) . ' ');}
              ?></p>
          </div>
        </div>
       
     </div>
   </div>
 </div>

</main>
<footer class="footer-container white-text-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><img src="./assets/images/mashup-icon.svg" alt=""></p>
        
        <p>©All right reserved. Design <a href="http://" title="Create website with free html template">Mashup Template</a>/<a href="https://unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>  
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     scrollRevelation('.card');
  });
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--><script type="text/javascript" src="./main.bc58148c.js"></script></body>

</html>