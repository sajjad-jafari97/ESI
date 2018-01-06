<?php
  include('api.php');
  include('js/jsPDF.php');


  if(isset($_POST['submit'])){
   $query = $db->prepare('INSERT INTO commande (conditionnement,total,destination,nomsal,
     stand,date_p,horaires,nom,prenom,mail,adresse,ville,pays,telfix,tel,societe)


    VALUES (:conditionnement_coord,:total_coord,:destination_coord,:nomsalon_coord,:stand_coord,:date_coord,:horaires_coord,
      :nom,:prenom,:mail,:adresse,:ville,:pays,:telfix,:tel,:societe)');



    $result = $query->execute(
   array(
   ':conditionnement_coord' => $_POST['conditionnement_coord'],
   ':total_coord' => intval($_POST['total_coord']),
   ':destination_coord' => $_POST['destination_coord'],
   ':nomsalon_coord' => $_POST['nomsalon_coord'],
   ':stand_coord' => $_POST['stand_coord'],
   ':date_coord' => $_POST['date_coord'],
   ':horaires_coord' => $_POST['horaires_coord'],
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

  //  die(var_dump($result));
  //  var_dump($_POST);

   ($result)
   ? print('<script>alert(" Vos informations ont été envoyées avec succès :) ")</script>')

   : print('L\'enregistrement de la catégorie a échoué');


 };



 ?>






<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="image/photo.jpg" type="imagegif">
    <style>
    body{
      background-color: #d0d6e0;
    }
  #form{
    border: 1px ;
    margin-top: 50px;
    border-radius: 15px;
    box-shadow: 1px 1px 50px black;
    background-color: #1d3a70
  }
  th{
    background-color: #1d3a70;
    color: white
  }
  td{

    font-weight: bold
  }
  label{
    color: white
  }
  #btn{
    margin-top: 25px
  }
  .title{
    color: white;
    font-size: 3.8vw
  }
  #hide{
    display: none;
  }
  .table-bordered{
    width:50%;
    margin: 10px auto;
  }
  .technique{

  margin: auto;


}
.technique h1{
  font-size: 3.2vw;


  font-weight: bold;
  color: #18418e

}
table{

  box-shadow: 1px 1px 50px black;

}
.total{
  font-size: 16px;

}


  </style>
  </head>
  <body>
    <div class="form-group technique ">


  <h1 class="text-center">Votre fiche technique</h1>
  </div>
    <table class="table table-striped table-bordered">

      <tr>
        <th>Conditionnement</th>
        <td><?php echo $_GET['cond'] ?></td>
      </tr>
      <tr>
      <th>Destination</th>
      <td><?php echo $_GET['destination'] ?></td>
      </tr>

      <tr>
      <th>Nom du salon</th>
      <td><?php echo $_GET['nomsalon'] ?></td>
      </tr>

      <tr>
      <th>Stand</th>
      <td><?php echo $_GET['stand'] ?></td>
      </tr>
      <tr>
      <th>Date</th>
      <td><?php echo $_GET['date'] ?></td>
      </tr>
      <tr>
      <th>Horaires</th>
      <td><?php echo $_GET['horaires'] ?></td>
      </tr>







  </table>


<table class="table table-striped table-bordered" style="margin-top:50px">
  <th style="font-size:1.4em;background-color:#0c383d;" class="col-md-6">Montant de la prestation</th>

  <td class="total" style="font-size:20px"><strong> <?php echo $_GET['total'] ?></strong></td>

</tr>
</table>

    <form class="form col-md-8 col-md-offset-2 col-sm-8  col-sm-offset-2 col-xs-8  col-xs-offset-2"  id="form" method="post" >
      <h1 class="text-center title">Entrez vos coordonnées</h1>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"  required>
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Prénom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prènom"  required>
    </div>


    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Mail:</label>
    <input type="text" class="form-control" id="mail" name="mail" placeholder="Mail"  required>
    </div>


    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Adresse:</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required >
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Ville:</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required >
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Pays:</label>
    <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays" required >
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Tél Fixe:</label>
    <input type="text" class="form-control" id="telfix" name="telfix" placeholder="Tél Fix" required >
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Tél:</label>
    <input type="text" class="form-control" id="tel" name="tel" placeholder="Tél"  required>
    </div>

    <div class="form-group col-md-6 col-sm-6">
    <label for="usr">Société:</label>
    <input type="text" class="form-control" id="societe" name="societe" placeholder="Société" required >
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="destination">Destination</label>
    <input type="text" class="form-control" id="destination" placeholder="destination" name="destination_coord"
     value="<?php echo $_GET['destination'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="nomsalon">Nom du salon</label>
    <input type="text" class="form-control" id="nomsalon" placeholder="Nom du salon" name="nomsalon_coord" value="<?php echo $_GET['nomsalon'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="stand">Stand</label>
    <input type="text" class="form-control" id="stand" placeholder="stand" name="stand_coord" value="<?php echo $_GET['stand'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="date">Date</label>
    <input type="text" class="form-control" id="date" placeholder="date" name="date_coord" value="<?php echo $_GET['date'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="horaires">Horaires</label>
    <input type="text" class="form-control" id="horaires" placeholder="horaires" name="horaires_coord" value="<?php echo $_GET['horaires'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="conditionnement">Conditionnement</label>
    <input type="text" class="form-control" id="conditionnement" placeholder="conditionnement"
     name="conditionnement_coord" value="<?php echo $_GET['cond'] ?>">
    </div>

    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="total">Total</label>
    <input type="text" class="form-control" id="total" placeholder="total" name="total_coord" value="<?php echo $_GET['total'] ?>">
    </div>
<!--
    <div class="form-group col-md-6 col-sm-6" id="hide">
    <label for="nombre">nombrel</label>
    <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
    </div> -->


    <div class="form-group  col-md-6 col-sm-6 col-xs-12 " id="btn">
          <button type="submit" class="btn btn-success" name="submit" onclick="genPDF()">Valider</button>
      </div>








  </form>


  <script src="jquery-3.2.1.min.js">

 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"> </script>

  </body>

</html>
