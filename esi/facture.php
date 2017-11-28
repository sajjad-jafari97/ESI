<?php
include('api.php');
include('app.php');





 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table table-striped table-bordered">
      <tr>
        <th>Depart</th>
        <th>Arriver</th>
        <th>Hauteur</th>
        <th>Largeur</th>
        <th>Profondeur</th>
        <th>Nombre</th>
        <th>Prix</th>
        <th>Horaires</th>
      </tr>

      <tr>
        <td><?php echo $_POST['depart'] ?></td>
        <td><?php echo $_POST['arriver'] ?></td>
        <td><?php echo $_POST['hauteur'] ?></td>
        <td><?php echo $_POST['largeur'] ?></td>
        <td><?php echo $_POST['profondeur'] ?></td>
        <td><?php echo $_POST['nombre'] ?></td>
        <td><strong> <?php echo $_POST['prix'] ?></strong></td>
        <td><?php echo $_POST['horaires'] ?></td>
      </tr>

    </table>




    <table class="table table-striped table-bordered">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Mail</th>
        <th>Adresse</th>
        <th>ville</th>
        <th>Pays</th>
        <th>Tél Fix</th>
        <th>Tél</th>
        <th>Société</th>
      </tr>

      <tr>
        <td><?php echo $_POST['nom'] ?></td>
        <td><?php echo $_POST['prenom'] ?></td>
        <td><?php echo $_POST['mail'] ?></td>
        <td><?php echo $_POST['adresse'] ?></td>
        <td><?php echo $_POST['ville'] ?></td>
        <td><?php echo $_POST['pays'] ?></td>
        <td><?php echo $_POST['telfix'] ?></td>
        <td><?php echo $_POST['tel'] ?></td>
        <td><?php echo $_POST['societe']; ?></td>
      </tr>

    </table>
  </body>
</html>
