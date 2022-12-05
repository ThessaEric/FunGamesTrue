<?php
session_start();
?>
 <!--Voici la page de la boutique-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  
  <!--<link rel="stylesheet" href="css/demo.css"-->
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/ico" href="images\cesi.svg"/>
  <title>BDE EXIA CESI BOUTIQUE</title>
  
  <link rel="stylesheet" type="text/css" href="boutique2.css">
   <link rel="stylesheet" type="text/css" href="vendors\fontawesome\css\all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body id="bd">
<div id="banner1">
  <nav class="navbar navbar-expand-lg navbar-light  bg-dark" style="height: 100px; width: 100%">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" href="#" style="color: white">
    <img style=" height: 110px;width: 110px; "alt="Logo" src="images\cesi.svg">
    <span class="stylelogo"><strong>Boutique BDE</strong></span>
</a>
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item" >
        <a class="nav-link" href="afficherPanier.php" style="color: white">Mon panier<i class="fas fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link btn btn-secondary dropdown-toggle" href="#" id="navbardropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
          Articles 
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         

  <button type="button" class="btn btn-secondary">
    Catégories
  </button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropright</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#Produits scolaires">Produits scolaires</a>
    <a class="dropdown-item" href="#Produits alimentaires">Produits alimentaires</a>
    <a class="dropdown-item" href="#Boissons">Boissons</a>
    <a class="dropdown-item" href="#Produits d'entretien">Produits d'entretien</a>
    <a class="dropdown-item" href="#Produits vestimentaires">Produits vestimentaires</a>
  </div>

            <a class="dropdown-item" href="#">Suggestions</a>
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="connexion.php" style="color: white">   <?php
          
          if(isset($_SESSION['Pseudo'])){
          echo $_SESSION['Pseudo'];
       }else{
          echo("Se connecter");
        }
        ?><i class="fas fa-user"></i></a>
      </li>
    </ul>
  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><a href="#Boissons">Rechercher</a></button>
    </form>


</nav>
<center>
  
  <aside id="mess">
 
  Bienvenue dans la boutique du BDE

</aside>

<div id="carouselExampleIndicators" class="carousel slide col-sm-8" data-ride="carousel"  height="500px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\soda.jpg" alt="First slide" height="500px" width="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\fruits.jpg" alt="Second slide" height= "500px" width="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\pain.jpg" alt="Third slide" height= "500px" width="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</center>

<?php
   if (isset($_SESSION['Statut'])) {
    if($_SESSION['Statut']=="membre du BDE"){

    echo  '<div id="membre">
  <i class="fas fa-plus-circle" style="font-size: 30px;
  color: green;" ></i>
</div>';
    
    }
   }

?>

<div id="banner1">
  </div>

 <div id="tout">
<section>
  <div class="categorie">

</div>
<div id="Produits scolaires"><strong>Produits scolaires</strong></div>
   <div class="produits">
    

    <?php
  
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
 }
 
 $requete = $bdd->query("SELECT * FROM produits WHERE Categorie='scolaire' " );

while($donnees= $requete->fetch() ){

?> 
  <div class="produit">
    <div class="ban">
      <p><strong><?php echo $donnees['Nomproduit'];?> </strong>prix: <strong><?php echo $donnees['Prix'];?></strong> fcfa  <p>
    </div>
   <img class="img" src="<?php echo $donnees['UrlImage']; ?>" height="220" width="220" />
 
   <form method="post" action=gererPanier.php>
                  <input type="hidden" name="ajouterPanier" value=<?php echo "'".$donnees['Nomproduit']."'";?>/> 
                 <?php
                     if (isset($_SESSION['Statut'])) {
                if($_SESSION['Statut']=="membre du BDE"){
                  echo '<a href="sup.php?numArticle=<?= '.$donnees['Id_produits'].' ?>"><input type="hidden" class="addButton"><i class="fas fa-minus-circle" style="color: red"></i></input></a>';
                  }
                  }
                 ?>
                 
  <p><input type="submit" class="btn btn-outline-primary" style="width: 220px" value="Acheter"/><p>
    
    </form>
    
  </div>
  <?php
}
 $requete->closeCursor();
?>
   </div>
</section>
<section>
  <div class="categorie">

</div>
<div id="Produits alimentaires"><strong>Produits alimentaires</strong></div>
   <div class="produits">
    

    <?php
  
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
 }
 
 $requete = $bdd->query("SELECT * FROM produits WHERE Categorie='alimentaires' " );

while($donnees= $requete->fetch() ){

?> 
  <div class="produit">
    <div class="ban">
     <p> <strong><?php echo $donnees['Nomproduit'];?> </strong>prix: <strong><?php echo $donnees['Prix'];?></strong> fcfa <p>
    </div>
   <img class="img" src="<?php echo $donnees['UrlImage']; ?>" height="220" width="220" />
  
  <form method="post" action=gererPanier.php>

            <?php
                     if (isset($_SESSION['Statut'])) {
                if($_SESSION['Statut']=="membre du BDE"){
                  echo '<a href="sup.php?numArticle=<?= '.$donnees['Id_produits'].' ?>"><input type="hidden" class="addButton"><i class="fas fa-minus-circle" style="color: red"></i></input></a>';
                  }
                  }
                 ?>
            
                 <p><input type="submit" class="btn btn-outline-primary" style="width: 220px" value="Acheter"/><p>
                  
    </form>
    
  </div>
  <?php
}
 $requete->closeCursor();
?>
   </div>
</section>
<section>
  <div class="categorie">

</div>
<div id="Boissons"><strong>Boissons</strong></div>
   <div class="produits">
    

    <?php
  
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
 }
 
 $requete = $bdd->query("SELECT * FROM produits WHERE Categorie='boissons' " );

while($donnees= $requete->fetch() ){

?> 
  <div class="produit">
    <div class="ban">
       <p> <strong><?php echo $donnees['Nomproduit'];?> </strong>prix: <strong><?php echo $donnees['Prix'];?></strong><p>
    </div>
   <img class="img" src="<?php echo $donnees['UrlImage']; ?>" height="220" width="220" />
   
<form method="post" action=gererPanier.php>
                  <input type="hidden" name="ajouterPanier" value=<?php echo "'".$donnees['Nomproduit']."'";?>/>
                
        <?php
                     if (isset($_SESSION['Statut'])) {
                if($_SESSION['Statut']=="membre du BDE"){
                  echo '<a href="sup.php?numArticle=<?= '.$donnees['Id_produits'].' ?>"><input type="hidden" class="addButton"><i class="fas fa-minus-circle" style="color: red"></i></input></a>';
                  }
                  }
                 ?>
         
                 <p><input type="submit" class="btn btn-outline-primary" style="width: 220px" value="Acheter"/><p>
                 
    </form>
    
  </div>
  <?php
}
 $requete->closeCursor();
?>
   </div>
</section>
<section>
  <div class="categorie">

</div>
<div id="Produits d'entretien"><strong>Produits d'entretien</strong></div>
   <div class="produits">
    

    <?php
  
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
 }
 
 $requete = $bdd->query("SELECT * FROM produits WHERE Categorie='entretien' " );

while($donnees= $requete->fetch() ){

?> 
  <div class="produit">
    <div class="ban">
      <p><strong><?php echo $donnees['Nomproduit'];?> </strong>prix: <strong><?php echo $donnees['Prix'];?></strong><p>
    </div>
   <img class="img" src="<?php echo $donnees['UrlImage']; ?>" height="220" width="220" />
   
<form method="post" action=gererPanier.php>
                  <input type="hidden" name="ajouterPanier" value=<?php echo "'".$donnees['Nomproduit']."'";?>/> 
         <?php
                   if (isset($_SESSION['Statut'])) {
                if($_SESSION['Statut']=="membre du BDE"){
                  echo '<a href="sup.php?numArticle=<?= '.$donnees['Id_produits'].' ?>"><input type="hidden" class="addButton"><i class="fas fa-minus-circle" style="color: red"></i></input></a>';
                  }
                  }
                 ?>
         
                 <p><input type="submit" class="btn btn-outline-primary" style="width: 220px" value="Acheter"/><p>
                  
    </form>
    
  </div>
  <?php
}
 $requete->closeCursor();
?>
   </div>
</section>
<section>
  <div class="categorie">

</div>
<div id="Produits vestimentaires"><strong>Produits vestimentaires</strong></div>
   <div class="produits">
    

    <?php
  
  try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '');
  
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
 }
 
 $requete = $bdd->query("SELECT * FROM produits WHERE Categorie='vestimentaire' " );

while($donnees= $requete->fetch() ){

?> 
  <div class="produit">
    <div class="ban">
      <p><strong><?php echo $donnees['Nomproduit'];?> </strong>prix: <strong><?php echo $donnees['Prix'];?></strong> <p>
    </div>
   <img class="img" src="<?php echo $donnees['UrlImage']; ?>" height="220" width="220" />
   
<form method="post" action=gererPanier.php>
                  <input type="hidden" name="ajouterPanier" value=<?php echo "'".$donnees['Nomproduit']."'";?>/> 
                 
   <?php
                     if (isset($_SESSION['Statut'])) {
                if($_SESSION['Statut']=="membre du BDE"){
                  echo '<a href="sup.php?numArticle=<?= '.$donnees['Id_produits'].' ?>"><input type="hidden" class="addButton"><i class="fas fa-minus-circle" style="color: red"></i></input></a>';
                  }
                  }
                 ?>

          <p><input type="submit" class="btn btn-outline-primary" style="width: 220px" value="Acheter"/><p>
                  
    </form>
    
  </div>
  <?php
}
 $requete->closeCursor();
?>
   </div>
</section>
 </div> 
 <footer class="footer-distributed">

      <div class="footer-left">

        <h3><span><img style=" height: 110px;width: 110px; "alt="Logo" src="images\cesi.svg"></span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Blog</a>
          ·
          <a href="#">Pricing</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">BDE EXIA CESI &copy; 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Campus Ucac-icam</span> Yansoki, Douala</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+237 695184645</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">ecole-ingenieurs.cesi.fr/</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>A propos</span>
        Le BDE est une institution estudiantine qui vise à épanouir les étudiants. Notre BDE est à l'écoute des 
        besoins des étudiants pour qu'il aie des conditions de vie agréable au sein du campus. 
        </p>
<br/>
        <p class="footer-company-about">Pour plus d'informations consultez: <a href="mentions.php">Mentions legales</a></p>
        <p class="footer-company-about">Consultez les conditions générales de vente ici<a href="cvg.php">Conditions générales de vente</a></p>
        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
  
   <link rel="stylesheet" type="text/css" href="boutique.css">
 <script src="vendors\JQuery\jquery.js"></script><script>if (typeof module === 'object') {window.module = module; module = undefined;}</script>
     <link rel="stylesheet" type="text/css" href="vendors\autocomplete\autocomplete-0.3.0.min.css">
    <script src="vendors\autocomplete\jquery-ui.js"></script>
     <link rel="stylesheet" type="text/css" href="vendors\autocomplete\jquery-ui.css">
  <script src="vendors\autocomplete\autocomplete-0.3.0.min.js"></script>
       

  <script>if (window.module) module = window.module;</script>

  <script>

        var liste = [
          " Boissons","crème glace","Fanta", "Chocolat", "casquette"

        ];
     
     $( "#search" ).autocomplete({
          source : liste
      });
   </script>
  <script src="vendors\bootstrap\js\bootstrap.bundle.min.js"></script>
<script src="ajout.js"></script>

</body>
</html>