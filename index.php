<?php
  session_start();
  if (!isset($_SESSION['amari'])){
    // header("location: login.php");
  }
  if (empty($_SESSION['amari'])){
    // header("location: login.php");
  }
    //Lié la page index.php et la page fonction.php
    require("param/fonction.php");
    $mesregion=affiche();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="voir.php" style="font-weight: bold">Voir Etudiant<span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
</br>
<form method="post">
<div class="efmi">
<div class="form-group">
    <label for="exampleimage">Ine</label>
    <input type="name" class="form-control" name="ine" required>
  </div>    
<div class="form-group">
    <label for="exampleimage">Nom</label>
    <input type="name" class="form-control" name="nom" required>
  </div>
  <div class="form-group">
    <label for="examplenom">prenom</label>
    <input type="text" class="form-control" name="prenom" required>
  </div>
  <div class="form-group">
    <label for="exampleprix">email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampledesc">Telephone</label>
    <input class="form-control" name="telephone" required>
  </div>
  <div class="form-group">
    <label for="exampleimage">Genre</label>
    <input type="name" class="form-control" name="genre" required>
  </div>
  <button type="submit" name="ajout" class="btn btn-success">Ajouter etudiant</button>
</div>
</form>
<!-- <li><a href="supprime.php" class="text-white">Supprimer membre</a></li> -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>


<?php 
  if (isset($_POST['ajout']))
  {
    if (isset($_POST['ine']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['telephone']) AND isset($_POST['genre']))
    {
      if (!empty($_POST['ine']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['telephone']) AND !empty($_POST['genre']))
      {
        $ine=htmlspecialchars(strip_tags($_POST['ine']));
        $nom=htmlspecialchars(strip_tags($_POST['nom']));
        $prenom=htmlspecialchars(strip_tags($_POST['prenom']));
        $email=htmlspecialchars(strip_tags($_POST['email']));
        $telephone=htmlspecialchars(strip_tags($_POST['telephone']));
        $genre=htmlspecialchars(strip_tags($_POST['genre']));
        try{
          ajouterm($ine,$nom,$prenom,$email,$telephone,$genre);
        }catch (Exception $e)
        {
          $e->getMessage();
        }
      }
    }
  }
?>