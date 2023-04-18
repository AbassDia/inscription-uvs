<?php
    session_start();
    if (!isset($_SESSION['amari'])){
    //   header("location: login.php");
    }
    if (empty($_SESSION['amari'])){
    //   header("location: login.php");
    }
    //Lié la page index.php et la page fonction.php
    require("param/fonction.php");
    $mesetudiant=afficher();
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
        <a class="nav-link" href="index.php" style="font-weight: bold">Nouveau Etudiant <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>
</br>
<div class="container">
<div class="row">
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Ine</th>
      <th scope="col">Nom</th>
      <th scope="col">Preom</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Genre</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($mesetudiant as $etudiant):?>
    <tr>
      
      <td><?=$etudiant->ine?></td>
      <td><?=$etudiant->nom?></td>
      <td><?=$etudiant->prenom?></td>
      <td><?=$etudiant->email?></td>
      <td><?=$etudiant->telephone?></td>
      <td><?=$etudiant->genre?></td>
      <td>
      <a href="editermembre.php?amari=<?=$etudiant->id?>"></a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>          
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
