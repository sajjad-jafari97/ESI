<?php
include('api.php');
include('app.php');
 if(isset($_POST['submit'])){

  $query = $db->prepare('INSERT INTO command (arriver,depart,hauteur,largeur,prix,nombre,profondeur,horaires)
   VALUES (:arriver,:depart,:hauteur,:largeur,:prix,:nombre,:profondeur,:horaires)');

   $result = $query->execute(
  array(
  ':arriver' => $_POST['arriver'],
  ':depart' => $_POST['depart'],
  ':hauteur' => $_POST['hauteur'],
  ':largeur' => $_POST['largeur'],
  ':prix' => $_POST['prix'],
  ':nombre' => $_POST['nombre'],
  ':profondeur' => $_POST['profondeur'],
  ':horaires' => $_POST['horaires']

  )

);

($result)
  ? print('<script>alert("Your informations has been sent succesfuly :)")</script>')
  : print('L\'enregistrement de la catégorie a échoué');
 };

 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESI</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="asset/image/photo.jpg" type="imagegif">
  </head>
  <body>
    <div class="form-group bien ">


    <h1 class="text-center">Bienvenue</h1>
    </div>

<div class="container">

  <form method="post">
    <div class="form-group col-md-3">
      <label for="depart">Depart</label>
      <input type="text" class="form-control" id="depart" placeholder="depart" name="depart">
    </div>


    <div class="form-group col-md-3 ">
      <label for="hauteur">Hauteur</label>
      <input type="text" class="form-control" id="hauteur" placeholder="hauteur" name="hauteur" onkeyup="calcul()">
    </div>


    <div class="form-group col-md-3 ">
      <label for="profondeur">Profondeur</label>
      <input type="text" class="form-control" id="profondeur" placeholder="profondeur" name="profondeur" onkeyup="calcul()">
    </div>
    <div class="form-group col-md-3">
      <label for="prix">Prix</label>
      <input type="text" class="form-control" id="prix" placeholder="prix" name="prix" onkeyup="calcul()">
    </div>
    <div class="form-group col-md-3 ">
      <label for="arriver">Arriver</label>
      <input type="text" class="form-control" id="arriver" placeholder="arriver" name="arriver">
    </div>




    <div class="form-group col-md-3 ">
      <label for="largeur">Largeur</label>
      <input type="text" class="form-control" id="largeur" placeholder="largeur" name="largeur" onkeyup="calcul()">
    </div>


    <div class="form-group col-md-3 ">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" onkeyup="calcul()">
    </div>
      <div class=" form_group col-md-3 select">
    <select class="form-control form-control-lg"  name="horaires">
      <option>Matin</option>
      <option>Après_midi</option>
    </select>
      </div>

      <div class="form-group  col-md-6">
          <button type="submit" class="btn btn-success" name="submit">Valider</button>
      </div>



  </form>

</div>
  </body>

</html>
