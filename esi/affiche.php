<?php
include('api.php');
include('app.php');

 if(isset($_POST['submit'])){
   $query = $db->prepare('INSERT INTO command (arriver,depart,hauteur,largeur,
     prix,nombre,profondeur,horaires,nom,prenom,mail,adresse,ville,pays,telfix,tel,societe)


    VALUES (:arriver,:depart,:hauteur,:largeur,:prix,:nombre,:profondeur,
      :horaires,:nom,:prenom,:mail,:adresse,:ville,:pays,:telfix,:tel,:societe)');

    $result = $query->execute(
   array(
   ':arriver' => $_POST['arriver'],
   ':depart' => $_POST['depart'],
   ':hauteur' => $_POST['hauteur'],
   ':largeur' => $_POST['largeur'],
   ':prix' => $_POST['prix'],
   ':nombre' => $_POST['nombre'],
   ':profondeur' => $_POST['profondeur'],
   ':horaires' => $_POST['horaires'],
   ':nom' => $_POST['nom'],
   ':prenom' => $_POST['prenom'],
   ':mail' => $_POST['mail'],
   ':adresse' => $_POST['adresse'],
   ':ville' => $_POST['ville'],
   ':pays' => $_POST['pays'],
   ':telfix' => $_POST['telfix'],
   ':tel' => $_POST['tel'],
   ':societe' => $_POST['societe']


   )

   );

   ($result)
   ? print('<script>alert("Your information has been sent succesfuly :)")</script>')
   : print('L\'enregistrement de la catégorie a échoué');



  // $arriver = $_POST['arriver'];
  // $depart = $_POST['depart'];
  // $hauteur = $_POST['hauteur'];
  // $largeur = $_POST['largeur'];
  // $prix = $_POST['prix'];
  // $nombre = $_POST['nombre'];
  // $profondeur = $_POST['profondeur'];
  // $horaires = $_POST['horaires'];
  // $nom = $_POST['nom'];
  // $prenom = $_POST['prenom'];
  // $mail = $_POST['mail'];
  // $adresse = $_POST['adresse'];
  // $ville = $_POST['ville'];
  // $pays = $_POST['pays'];
  // $telfix = $_POST['telfix'];
  // $tel = $_POST['tel'];
  // $societe = $_POST['societe'];
  // header('location:facture.php?arriver='.$arriver.'&depart='.$depart.'&hauteur='.$hauteur.'&largeur='
  // .$largeur.'&prix='.$prix.'&nombre='.$nombre.'&profondeur='.$profondeur.'&horaires='.$horaires.
  // '&nom='.$nom.'&prenom='.$prenom.'&mail='.$mail.'&adresse='.$adresse.'&ville='.$ville.'&pays='.$pays.
  // '&telfix='.$telfix.'&tel='.$tel.'&societe='.$societe
  //   );


 };



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="asset/image/photo.jpg" type="imagegif">
    <style>
    #form{
      border: 1px ;
      margin-top: 50px;
      border-radius: 15px;
      box-shadow: 1px 1px 50px black;
      background-color: #2A926E
    }
    th{
      background-color: #2A926E;
      color: white
    }
    label{
      color: white
    }
    #btn{
      margin-top: 25px
    }
    .title{
      color: white
    }
    #hide{
      display: none
    }

    </style>
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
        <td><?php echo $_GET['depart'] ?></td>
        <td><?php echo $_GET['arriver'] ?></td>
        <td><?php echo $_GET['hauteur'] ?></td>
        <td><?php echo $_GET['largeur'] ?></td>
        <td><?php echo $_GET['profondeur'] ?></td>
        <td><?php echo $_GET['nombre'] ?></td>
        <td><strong> <?php echo $_GET['prix'] ?></strong></td>
        <td><?php echo $_GET['horaires'] ?></td>
      </tr>

    </table>

    <form class="form col-md-8 col-md-offset-2"  id="form" method="post" >
      <h1 class="text-center title">Entrez vos coordonnées</h1>

    <div class="form-group col-md-6">
    <label for="usr">Nom:</label>
    <input type="text" class="form-control" id="usr" name="nom" placeholder="Nom">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Prènom:</label>
    <input type="text" class="form-control" id="usr" name="prenom" placeholder="Prènom">
    </div>


    <div class="form-group col-md-6">
    <label for="usr">Mail:</label>
    <input type="text" class="form-control" id="usr" name="mail" placeholder="Mail">
    </div>


    <div class="form-group col-md-6">
    <label for="usr">Adresse:</label>
    <input type="text" class="form-control" id="usr" name="adresse" placeholder="Adresse">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Ville:</label>
    <input type="text" class="form-control" id="usr" name="ville" placeholder="Ville">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Pays:</label>
    <input type="text" class="form-control" id="usr" name="pays" placeholder="Pays">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Tél Fix:</label>
    <input type="text" class="form-control" id="usr" name="telfix" placeholder="Tél Fix">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Tél:</label>
    <input type="text" class="form-control" id="usr" name="tel" placeholder="Tél">
    </div>

    <div class="form-group col-md-6">
    <label for="usr">Société:</label>
    <input type="text" class="form-control" id="usr" name="societe" placeholder="Société">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="depart">Depart</label>
    <input type="text" class="form-control" id="depart"
    placeholder="depart" name="depart" value="<?php echo $_GET['depart'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="arriver" class="dow">Arriver</label>
    <input type="text" class="form-control" id="arriver"
     placeholder="arriver" name="arriver" value="<?php echo $_GET['arriver'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="hauteur">Hauteur</label>
    <input placeholder="hauteur" name="hauteur" onkeyup="calcul()" value="<?php echo $_GET['hauteur'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="largeur" class="dow">Largeur</label>
    <input type="text" class="form-control " id="largeur"
    placeholder="largeur" name="largeur" onkeyup="calcul()" value="<?php echo $_GET['largeur'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="profondeur">Profondeur</label>
    <input type="text" class="form-control" id="profondeur"
    placeholder="profondeur" name="profondeur" onkeyup="calcul()" value="<?php echo $_GET['profondeur'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="nombre" class="dow">Nombre</label>
    <input type="text" class="form-control " id="nombre"
    placeholder="nombre" name="nombre" onkeyup="calcul()" value="<?php echo $_GET['nombre'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix"
    placeholder="prix" name="prix" onkeyup="calcul()" value="<?php echo $_GET['prix'] ?>">
    </div>

    <div class="form-group col-md-6" id="hide">
    <input class="form-control form-control-lg"  name="horaires"
    value="<?php echo $_GET['horaires']?>">


    </div>



    <div class="form-group  col-md-6 col-sm-6 col-xs-12 " id="btn">
        <button type="submit" class="btn btn-primary" name="submit">Valider</button>
    </div>

    </form>

  </body>
</html>
